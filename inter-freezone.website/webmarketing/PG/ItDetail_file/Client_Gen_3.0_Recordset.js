function Recordset(Name, DSN)
{
	RSReconnect(this);
	this.Name = Name;
	this.DSN = DSN;
	this.Separator = "!*+";
	return this;
}

function RSReconnect(Object)
{
	Object.SetColumnValue = RSSetColumnValue;
	Object.MoveFirst = RSMoveFirst;
	Object.MoveNext = RSMoveNext;
	Object.MovePrevious = RSMovePrevious;
	Object.MoveLast = RSMoveLast;
	Object.Insert = RSInsert;
	Object.Update = RSUpdate;
	Object.Delete = RSDelete;
	Object.Close = RSClose;
	Object.Filter = RSFilter;
	Object.OrderBy = RSOrderBy;
	Object.ParseBindings = RSParseBindings;
	Object.SetBindings = RSSetBindings;
	Object.AddBinding = RSAddBinding;
	Object.RemoveBinding = RSRemoveBinding;
	Object.GetBindingValue = RSGetBindingValue;
	Object.SetBindingValue = RSSetBindingValue;
	Object.GetBindingType = RSGetBindingType;
	Object.SetBindingType = RSSetBindingType;
	Object.GetBoundColumnName = RSGetBoundColumnName;
	Object.SetElementID		= RSSetElementIDValue;
	Object.GetElementID		= RSGetElementIDValue;

}


function RSSetElementIDValue(name,val)
{
	if (document.all)
			elementID = eval("document.all." + name);
		else
			elementID = eval("document." + name);

	if (elementID == null) {
		elementID = resolveElementInDoc(document, name, "Form Element", "");

		if (elementID == null && navigator.appName.indexOf('Microsoft') >= 0) elementID = eval(name);
		if (elementID == null && type != "Plug-In") alert("Could not resolve elementID for " + name + " (" + "Form Element" + ")");

		}

	if (elementID != null) {
		elementID.value = val
	}
}

function RSGetElementIDValue(name)
{
	if (document.all)
			elementID = eval("document.all." + name);
		else
			elementID = eval("document." + name);

	if (elementID == null) {
		elementID = resolveElementInDoc(document, name, "Form Element", "");

		if (elementID == null && navigator.appName.indexOf('Microsoft') >= 0) elementID = eval(name);
		if (elementID == null && type != "Plug-In") alert("Could not resolve elementID for " + name + " (" + "Form Element" + ")");
		
		}


	if (elementID != null) {
		return elementID.value;
	}
}


function RSSetColumnValue(ColName, Val)
{
	BindingsArray = this.ParseBindings();
	BindingObj = RSFindBinding(BindingsArray, ColName);
	if(BindingObj == null)
	{
		BindingObj = new Object;
		BindingObj["Name"] = ColName;
		BindingsArray[BindingsArray.length] = BindingObj;
	}
	BindingObj["Type"] = "VAL";
	BindingObj["Value"] = Val;
	this.SetBindings(BindingsArray);
}

function RSMoveFirst()
{
	this.SetElementID(this.Name + "_Action","First");
}

function RSMoveNext()
{
	this.SetElementID(this.Name + "_Action","Next");
}

function RSMovePrevious()
{
	this.SetElementID(this.Name + "_Action","Previous");
}

function RSMoveLast()
{
	this.SetElementID(this.Name + "_Action","Last");
}

function RSInsert()
{
	this.SetElementID(this.Name + "_Action","Insert");
}

function RSUpdate()
{
	this.SetElementID(this.Name + "_Action","Update");
}

function RSDelete()
{
	this.SetElementID(this.Name + "_Action","Delete");
}
function RSClose()
{
	this.SetElementID(this.Name + "_Action","Close");
}

function RSFilter(Where)
{
	this.SetElementID(this.Name + "_Action","Filter(" + Where + ")");
}

function RSOrderBy(ColName)
{
	this.SetElementID(this.Name + "_Action","OrderBy(" + ColName + ")");
}

function RSParseBindings()
{
	BindingsArray = new Array();
	Bindings = this.GetElementID(this.Name + "_Bindings");
	if(Bindings != null)
	{
		Bindings = String(Bindings);
		if(Bindings != "")
		{
			nBinding = 0;
			for(;;)
			{
				BindIndex = Bindings.indexOf(this.Separator);
				if(BindIndex >= 0)
				{
					BoundColumn = Bindings.substring(0, BindIndex);
					Bindings = Bindings.substring(BindIndex + this.Separator.length, Bindings.length);
					BindIndex = Bindings.indexOf(this.Separator);
					if(BindIndex >= 0)
					{
						// get the location of the value
						BindingType = Bindings.substring(0, BindIndex);
						Bindings = Bindings.substring(BindIndex + this.Separator.length, Bindings.length);

						// get the value
						BindIndex = Bindings.indexOf(this.Separator);
						if(BindIndex < 0)
						{
							BindIndex = Bindings.length;
						}
						BoundValue = Bindings.substring(0, BindIndex);

						Binding = new Object();
						Binding["Name"] = BoundColumn;
						Binding["Type"] = BindingType;
						Binding["Value"] = BoundValue;
						BindingsArray[nBinding] = Binding;
						nBinding++;

						// next binding
						if(BindIndex == Bindings.length)
						{
							BindIndex = -1;
						}
						else
						{
							Bindings = Bindings.substring(BindIndex + this.Separator.length, Bindings.length);
						}
					}
				}
				if(BindIndex < 0)
				{
					break;
				}
			}
		}
	}
	return BindingsArray;
}

function RSSetBindings(BindingsArray)
{
	Bindings = "";
	if(BindingsArray != null)
	{
		for(i = 0, n = BindingsArray.length; i < n; i++)
		{
			BindingObj = BindingsArray[i];
			if(BindingObj != null)
			{
				ColumnName = BindingObj["Name"];
				BindingType = BindingObj["Type"];
				BoundValue = BindingObj["Value"];
				if(Bindings != "")
				{
					Bindings += this.Separator;
				}
				Bindings += ColumnName + this.Separator + BindingType + this.Separator + BoundValue;
			}
		}
	}
	this.SetElementID(this.Name + "_Bindings",Bindings);
}

function RSFindBinding(BindingsArray, ColumnName)
{
	if(BindingsArray != null)
	{
		for(i = 0, n = BindingsArray.length; i < n; i++)
		{
			BindingObj = BindingsArray[i];
			if(BindingObj["Name"] == ColumnName)
			{
				return BindingObj;
			}
		}
	}
	return null;
}

function RSAddBinding(ColumnName, BoundValue, BindingType)
{
	BindingsArray = this.ParseBindings();
	BindingObj = RSFindBinding(BindingsArray, ColumnName);
	if(BindingObj == null)
	{
		BindingObj = new Object();
		BindingObj["Name"] = ColumnName;
		BindingsArray[BindingsArray.length] = BindingObj;
	}
	BindingObj["Type"] = BindingType;
	BindingObj["Value"] = BoundValue;
	this.SetBindings(BindingsArray);
}

function RSRemoveBinding(ColumnName)
{
	BindingsArray = this.ParseBindings();
	if(BindingsArray.length)
	{
		NewBindingsArray = new Array();
		for(i = 0, n = BindingsArray.length; i < n; i++)
		{
			BindingObj = BindingsArray[i];
			if(BindingObj["Name"] != ColumnName)
			{
				NewBindingsArray[NewBindingsArray.length] = BindingObj;
			}
		}
		this.SetBindings(NewBindingsArray);
	}
}

function RSGetBindingValue(ColumnName)
{
	BindingsArray = this.ParseBindings();
	BindingObj = RSFindBinding(BindingsArray, ColumnName);
	if(BindingObj == null)
	{
		return "";
	}
	return BindingObj["Value"];
}

function RSSetBindingValue(ColumnName, BoundValue)
{
	BindingsArray = this.ParseBindings();
	BindingObj = RSFindBinding(BindingsArray, ColumnName);
	if(BindingObj != null)
	{
		BindingObj["Value"] = BoundValue;
		this.SetBindings(BindingsArray);
	}
}

function RSGetBindingType(ColumnName)
{
	BindingsArray = this.ParseBindings();
	BindingObj = RSFindBinding(BindingsArray, ColumnName);
	if(BindingObj == null)
	{
		return "";
	}
	return BindingObj["Type"];
}

function RSSetBindingType(ColumnName, BindingType)
{
	BindingsArray = this.ParseBindings();
	BindingObj = RSFindBinding(BindingsArray, ColumnName);
	if(BindingObj != null)
	{
		BindingObj["Type"] = BindingType;
		this.SetBindings(BindingsArray);
	}
}

function RSGetBoundColumnName(BoundValue, BindingType)
{
	BindingsArray = this.ParseBindings();
	if(BindingsArray.length)
	{
		for(i = 0, n = BindingsArray.length; i < n; i++)
		{
			BindingObj = BindingsArray[i];
			if(BindingObj["Value"] == BoundValue && BindingObj["Type"] == BindingType)
			{
				return BindingObj["Name"];
			}
		}
	}
	return "";
}


