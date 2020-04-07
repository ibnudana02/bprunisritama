<!-- about-area start -->
<div class="about-area struktur">
    <div class="container">
        <div class="row">
            <h4 class="text-center">Struktur Organisasi</h4>
            <hr>

            <div id="tree" />
        </div>
    </div>
</div>
<!-- about-area end -->

<script>
    var data = <?php echo json_encode($data); ?>;

    var chart = new OrgChart(document.getElementById("tree"), {
        // orientation: OrgChart.orientation.right,
        enableSearch: false,
        template: "mila",
        nodeBinding: {
            field_0: "Nama",
            field_1: "Jabatan",
        },
        tags: {
            dekom: {
                group: true,
                groupName: "Dewan Komisaris",
                groupState: OrgChart.EXPAND,

                template: "group_grey"
            },
            dir: {
                group: true,
                groupName: "Direksi",
                groupState: OrgChart.EXPAND,

                template: "group_grey"
            },

            mkrd: {
                group: true,
                groupName: "Marketing Kredit",
                groupState: OrgChart.EXPAND,

                template: "group_grey"
            },
        },
        // nodes: data
    });

    for (i in data) {
        var nama = data[i].nama,
            jabatan = data[i].jabatan,
            id = data[i].id_pegawai,
            pid = data[i].parent_job,
            tags = data[i].tag;



        chart.add({
            id: id,
            pid: pid,
            tags: [tags],
            Nama: nama,
            Jabatan: jabatan
        });
    }

    chart.draw(OrgChart.action.init);
</script>