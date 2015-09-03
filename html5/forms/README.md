# Forms
The `<form>` tags is used to create a form for user input.
## Atributes
The tag has the following attributes:
* **name**
* **method**: POST | GET
* **action**: *URL*
* **target**:
  * _blank: The response is displayed in a new window/tab
  * _self: The response is displayed in the same frame (default)
  * _parent: The response is displayed in the parent frame
  * _top: The response is displayed in the full body of the window
* **enctype**:
  * application/x-www-form-urlencoded (default): Characters are encoded before sent (spaces --> +, special characters --> ASCII HEX)
  * multipart/form-data: No characters encoded. Required for file upload.
  * text/plain: only spaces are converted to +.
* **accept-charset**: common values are UTF-8 (Unicode) and ISO-8859-1 (Latin Alphabet).

## Input tags
When the browser is not able to interpret the tag, it shows the content inside.

### `<datalist>`
Used to specified predefined options for an input element.
Input has a **list** attribute that references to the id of the **datalist**. It is used to provide an autocomplete feature on input.
Each option of the datalist could have a **label** attribute.

### `<progress>`
Represent the progress of a task. It could have the attributes:
* **min**: minimum possible value.
* **max**: max value.
* **value**: current value.

### `<meter>`
Defines a scalar measurement within a known range.
As progress tag, it has **min**, **max** and **value** attributes.

## CSS selectors
### `:valid` / `:invalid`
Select and style only if the value is valid/invalid. An empty content it is a valid one.
### `:optional` / `:required`
**:optional** only select and style if the input does not have a "required" attribute.

### `:in-range` / `:out-of-range`
Select and style only if the value is "in range", that is, the value is between **min** and **max** attributes. Note: An input number does not let you insert invalid value using the arrows, the only way you can insert it is using the keyboard.
