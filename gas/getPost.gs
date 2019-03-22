
function doPost(e) {
  try {
    var jsonString = e.postData.getDataAsString();
    var jsonData = JSON.parse(jsonString);
    var ss = SpreadsheetApp.openById(SpreadsheetApp.getActiveSpreadsheet().getId());
    var sheet = ss.getSheetByName("シート1");
    sheet.appendRow([jsonString]);
    for(var r = 0; r < jsonData.length; r++)
    {
      var row = jsonData[r];
      sheet.appendRow([jsonData.length]);
      sheet.appendRow([1]);
      sheet.appendRow(row);

    }
  } catch (er) {
    sheet.appendRow([new Date(),"例外が発生しました",er.message]);
  }
}
