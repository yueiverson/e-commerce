$(document).ready(function(){
    $(document).on('click', 'input#smb_login', function(event){
        event.preventDefault();

        if( $('input#username').val() == '' ) {
            alert('請輸入帳號');
            return false;
        }

        if( $('input#pwd').val() == '' ) {
            alert('請輸入密碼');
            return false;
        }

        $('form#myForm').submit();
    });

    $(document).on('click', 'input#smb', function(event){
        event.preventDefault();

        let inputitemName = $('input#itemName');

        if( inputitemName.val() == '' ) {
            alert('請輸入商品名稱');
            return false;
        }


        $('form#myForm').submit();
    });
});