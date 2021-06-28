$(function () {
    $('.numeric').keyup(function(e)
    {
        if (/\D/g.test(this.value))
        {
            // Filter non-digits from input value.
            this.value = this.value.replace(/\D/g, '');
        }
    });

    $('.delete').click(function (e) {
        var c = confirm("Are you sure you want to delete?");
        if (c == false) return false;
    });
})

function toastMessage(message, isSuccess) {
    if(isSuccess === 'success') {
        $.toast({
            heading: 'Амжилттай',
            text: message,
            showHideTransition: 'fade',
            icon: 'success',
            position: 'top-right',
        });
    } else if (isSuccess === 'warning') {
        $.toast({
            heading: 'Анхааруулга',
            text: message,
            showHideTransition: 'fade',
            icon: 'warning',
            position: 'top-right',
        });
    } else if(isSuccess === ' error') {
        $.toast({
            heading: 'Алдаа',
            text: message,
            showHideTransition: 'fade',
            icon: 'error',
            position: 'top-right',
        });
    }
}