let container = document.querySelector('#container');
container.style.display = 'flex';
$(document).ready(function () {
    $('#button').on('click', function () {
        let input = $('#input').val();
        let input2 = $('#input2').val();
        let input3 = $('#input3').val();
        $.ajax({
            url:'database.php',
            type: 'POST',
            data: { inputValue: input, inputValue2: input2, inputValue3: input3 } ,
            success: function (response) {
                console.log(`its ok ${response}`);
                for (let i = 0 ; i < response.length ; i++) {
                    let div = document.createElement('div');
                    div.innerHTML = response[i] + '-';
                    container.appendChild(div);
                }
                     $('#h1').html(response);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#h1').html('error')
                console.error(textStatus, errorThrown);
            }
        })
    });
});

