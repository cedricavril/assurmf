// won't work efficiently in case of bad connection (lag prohibited since success function is not 
// bound bound)
ajax = function (url, data = '', asynchronous = true){
    var msg = Object();
    $.ajax({
        url: url,
        method: "POST",
        data: data,
        async: asynchronous,
        success: function( successMsg ) {
            try
            {
               msg.data = JSON.parse(successMsg);
            }
            catch(e)
            {
               msg.data = successMsg;
            }
            finally
            {
                msg.type = 'success';
            }
        }, 
        fail: function(failMsg) {
            try
            {
               msg.data = JSON.parse(failMsg);
            }
            catch(e)
            {
               msg = failMsg;
            }
            finally
            {
                msg.type = 'fail';
            }
        }
    });
    return msg;
};
