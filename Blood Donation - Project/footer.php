<div id="manualFooter" class="d-flex justify-content-center">
    <div>
        <span id="footerText" class="display-5">Designed and developed by MIS students &nbsp;</span>
        <i class="fab fa-facebook footerImg fa-2x"></i>
        <i class="fab fa-instagram footerImg fa-2x"></i>
    </div>

</div>





<script>
    
  
    new WOW().init();


    $('#arabic').click(function() {
        if ($('.firstAbout').css('display') === 'block') {
            $('.firstAbout').fadeOut(300);
            $('.secondAbout').fadeIn(2000);
            $('#arabic').text('English');
        } else {
            $('.firstAbout').fadeIn(2000);
            $('.secondAbout').fadeOut(300);
            $('#arabic').text('اللغة العربية');
        }
    });
    (function() {
        var
            filters = {
                city: null,
                blood: null

            };

        function updateFilters() {
            $('.task-list-row').hide().filter(function() {
                var
                    self = $(this),
                    result = true; // not guilty until proven guilty

                Object.keys(filters).forEach(function(filter) {
                    if (filters[filter] && (filters[filter] != 'None') && (filters[filter] != 'Any')) {
                        result = result && filters[filter] === self.data(filter);
                    }
                });

                return result;
            }).show();
        }

        function bindDropdownFilters() {
            Object.keys(filters).forEach(function(filterName) {
                $('#' + filterName + '-filter').on('change', function() {
                    filters[filterName] = this.value;
                    updateFilters();
                });
            });
        }

        bindDropdownFilters();
    })();



    $(document).ready(function() {
        $('#cases').DataTable({
            bSort: false,


            initComplete: function() {
                this.api().columns([1, 3]).every(function() {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                });
            }


        });
    });

    // Captcha Script

    function checkform(theform) {
        var why = "";

        if (theform.CaptchaInput.value == "") {
            why += "- Please Enter CAPTCHA Code.\n";
        }
        if (theform.CaptchaInput.value != "") {
            if (ValidCaptcha(theform.CaptchaInput.value) == false) {
                why += "- The CAPTCHA Code Does Not Match.\n";
            }
        }
        if (why != "") {
            alert(why);
            return false;
        }
    }

    var a = Math.ceil(Math.random() * 9) + '';
    var b = Math.ceil(Math.random() * 9) + '';
    var c = Math.ceil(Math.random() * 9) + '';
    var d = Math.ceil(Math.random() * 9) + '';
    var e = Math.ceil(Math.random() * 9) + '';

    var code = a + b + c + d + e;
    document.getElementById("txtCaptcha").value = code;
    document.getElementById("CaptchaDiv").innerHTML = code;

    // Validate input against the generated number
    function ValidCaptcha() {
        var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
        var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
        if (str1 == str2) {
            return true;
        } else {
            return false;
        }
    }

    // Remove the spaces from the entered and generated code
    function removeSpaces(string) {
        return string.split(' ').join('');
    }



    $('#ifEmpty:empty').hide();

$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});

</script>
</body>

</html>
