<div class="postcode-check">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="errMessage"></div>
                <form class="form-inline" onsubmit="onSubmitHandler(event)">
                    <div class="row" style="display:flex; align-items: center;">
                        <div class="col-md-12">
                            <div style="display:flex; align-items: center; justify-content: center;">
                                <h3 style="margin-right: 15px;">Find by Postcode</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="txtPostcode"
                                           placeholder="Eg. WC1H 9NP">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Find</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Location List -->
<div class="modal fade" id="locationListByPostcode">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">
                    Found Locations By Postcode
                </h4>
            </div>
            <div class="modal-body">
                <select class="form-control" id="locationList" size="12"></select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info" onclick="location.href = '/category.php?cid=10'">
                    Go Next
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function onSubmitHandler(event) {
        event.preventDefault();
        $('#errMessage').text('').hide();

        let txtPostcode = $('#txtPostcode').val();
        if (txtPostcode === "" || txtPostcode == null) {
            $('#errMessage').text("Please enter a postcode first.").slideDown();
            return false;
        }

        $.get("https://www.biznetuk.com/api/api.php", {postcode: txtPostcode})
            .done(function (data) {
                if (data.message) {
                    $('#errMessage').text(data.message).slideDown();
                    return false;
                }

                data.map(function (item) {
                    let {thoroughfareNumber, thoroughfareName, subPremises, premisesName, postTown, postCode, country} = item.address;
                    $('#locationList').append(`<option value="${postCode}">${thoroughfareNumber ? thoroughfareNumber + ', ' : ''} ${thoroughfareName ? thoroughfareName + ', ' : ''} ${subPremises ? subPremises + ', ' : ''} ${premisesName ? premisesName + ', ' : ''} ${postTown ? postTown + ', ' : ''} ${postCode ? postCode + ', ' : ''} ${country ? country : ''}</option>`);
                })

                $('#locationListByPostcode').modal('toggle')
            });
    }
</script>