$(document).ready(function() {
    $('#change').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'change.php',
            data: $(this).serialize(),
            success: function(response)
            {
                let jsonData = JSON.parse(response);
                if (jsonData.success === 1)
                {
                    location.href = '';
                }
                else
                {
                    alert('Ошибка!');
                }
            }
        });
    });
});

$(document).ready(function() {
    $('#login').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'login.php',
            data: $(this).serialize(),
            success: function(response)
            {
                let jsonData = JSON.parse(response);
                if (jsonData.success === 1)
                {
                    location.href = '';
                }
                else
                {
                    alert('Ошибка!');
                }
            }
        });
    });
});

$(document).ready(function() {
    $('#registration').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'registration.php',
            data: $(this).serialize(),
            success: function(response)
            {
                let jsonData = JSON.parse(response);
                if (jsonData.success === 1)
                {
                    location.href = '';
                }
                else
                {
                    alert('Ошибка!');
                }
            }
        });
    });
});
