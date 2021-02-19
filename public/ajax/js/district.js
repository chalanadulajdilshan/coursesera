
$(document).ready(function () {
    $('#province').change(function () {

        var province_id = $(this).val();
       
        $('#distric-bar').empty();
        $.ajax({
            url: url + "district/get_district_by_province",
            type: "POST",
            data: {
                province_id: province_id,
            },
            dataType: "JSON",
            success: function (jsonStr) {
               
                var html = '<option value="" style="padding: 0px 12px 0px 12px"> - Select your District - </option>';
                $.each(jsonStr, function (i, data) {
                    html += '<option value="' + data.id + '">';
                    html += data.name;
                    html += '</option>';
                });

                $('#distric-bar').empty();
                $('#distric-bar').append(html);
            }
        });
    });
});

