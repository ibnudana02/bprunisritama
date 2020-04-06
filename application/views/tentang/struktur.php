<!-- about-area start -->
<div class="about-area area-padding">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Struktur Organisasi</h2>
        </div>
        <hr>
        <div class="row">
            <div id="tree" />
        </div>
    </div>
</div>
<!-- about-area end -->

<script>
    var chart = new OrgChart(document.getElementById("tree"), {
        nodeBinding: {
            field_0: "name"
        },
        nodes: [{
                id: 1,
                name: "Amber McKenzie"
            },
            {
                id: 2,
                pid: 1,
                name: "Ava Field"
            },
            {
                id: 3,
                pid: 1,
                name: "Peter Stevens"
            }
        ]
    });
</script>