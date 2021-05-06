function makeRequest(type,url,data,dataType){
    $.ajax ({
        type: this.type,
        url: this.url,
        data: this.data,
        dataType: this.dataType,

        success: function(json){

        },
        error: function (json){

        }
    });
}