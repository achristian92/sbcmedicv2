$(document).ready( function () {
    const dts = [
        "dtAppointment","dtSpeciality","dtProcedure","dtSchedule","dtDoctor"
    ];
    dts.forEach(function (dtable) {
        $('#'+dtable).DataTable({
            "order": [0,'desc'],
            "dom": '<"top"fl>rt<"bottom"ip>',
            "pageLength": 25,
            language: {
                "url": srclangdt,
            },
        });
    })
});
