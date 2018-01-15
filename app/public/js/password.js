//    $('#send_btn').hide();
function validatePassword(){
    var $correct = true;

    var $old_passwd = $('#input_old_passwd').val();
    if( !$old_passwd ){
        $('#old_passwd').show();
        $correct = false;
    }else{
        $('#old_passwd').hide();
    }

    var $new_passwd1 = $('#input_new_passwd1').val();
    var $new_passwd2 = $('#input_new_passwd2').val();

    if( $new_passwd1.length < 8){
        $('#min_passwd_length').show();
        $correct = false;
    }else{
        $('#min_passwd_length').hide();
    }

    if( $new_passwd1 !== $new_passwd2 ){
        $('#passwords_equals').show();
        $correct = false;
    }else{
        $('#passwords_equals').hide();
    }

    $is_num = false;
    $min_one_lower_char = false;
    $min_one_upper_char = false;
    for(var $i=0; $i<$new_passwd1.length; $i++){
        if( $new_passwd1[$i] >= '0' && $new_passwd1[$i] <= '9'){
            $is_num = true;
        }
        if( $new_passwd1[$i] >= 'a' && $new_passwd1[$i] <= 'z'){
            $min_one_lower_char = true;
        }
        if( $new_passwd1[$i] >= 'A' && $new_passwd1[$i] <= 'Z'){
            $min_one_upper_char = true;
        }
    }
    if( !$is_num){
        $('#min_one_number').show();
        $correct = false;
    }else{
        $('#min_one_number').hide();
    }
    if( !$min_one_lower_char){
        $('#min_one_lower_char').show();
        $correct = false;
    }else{
        $('#min_one_lower_char').hide();
    }
    if( !$min_one_upper_char){
        $('#min_one_big_char').show();
        $correct = false;
    }else{
        $('#min_one_big_char').hide();
    }



    if( $correct ){
//            $('#send_btn').show();
//            $('#send_btn').disabled(true);
        $( "#send_btn" ).prop( "disabled", false );
    }else{
//            $('#send_btn').hide();
//            $('#send_btn').disabled(true);
        $( "#send_btn" ).prop( "disabled", true );
    }

    return $correct;

}