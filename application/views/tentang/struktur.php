        <!-- about-area start -->
        <div class="about-area struktur">
            <div class="container" width="100%">
                <div class="row">
                    <h4 class="text-center">Struktur Organisasi</h4>
                    <hr>
                    <div id="tree"></div>
                </div>
            </div>
        </div>
        <!-- about-area end -->

        <script>
            var data = <?php echo json_encode($data); ?>;
            var selectedId = null;
            OrgChart.templates.mila.defs += '<filter id="f1" > \
                    <feGaussianBlur in="SourceGraphic" stdDeviation="4" /> \
                    </filter>';

            OrgChart.templates.company = Object.assign({}, OrgChart.templates.ana);
            // OrgChart.templates.company.size = [200, 200];
            OrgChart.templates.company.size = [330, 50];
            OrgChart.templates.company.node =
                '<rect x="0" y="0" width="330" height="50" fill="#ffffff" stroke-width="1" stroke="#aeaeae"></rect>';
            OrgChart.templates.company.field_0 = '<text style="font-size: 24px;" fill="#aeaeae" x="165" y="30" text-anchor="middle">{val}</text>';

            OrgChart.templates.company.ripple = {
                radius: 100,
                color: "#039BE5",
                rect: null
            };

            OrgChart.templates.dekom = Object.assign({}, OrgChart.templates.ana);
            OrgChart.templates.dekom.size = [330, 50];
            OrgChart.templates.dekom.node =
                '<rect x="0" y="0" width="330" height="50" fill="#ffffff" stroke-width="1" stroke="#aeaeae"></rect>';
            OrgChart.templates.dekom.field_0 = '<text style="font-size: 24px;" fill="#aeaeae" x="165" y="30" text-anchor="middle">{val}</text>';

            OrgChart.templates.dekom.ripple = {
                radius: 0,
                color: "#F57C00",
                rect: null
            };

            OrgChart.templates.dir = Object.assign({}, OrgChart.templates.ana);
            OrgChart.templates.dir.size = [330, 50];
            OrgChart.templates.dir.node =
                '<rect x="0" y="0" width="330" height="50" fill="#ffffff" stroke-width="1" stroke="#aeaeae"></rect>';
            OrgChart.templates.dir.field_0 = '<text style="font-size: 24px;" fill="#aeaeae" x="165" y="30" text-anchor="middle">{val}</text>';

            OrgChart.templates.dir.ripple = {
                radius: 0,
                color: "#F57C00",
                rect: null
            };

            OrgChart.templates.department = Object.assign({}, OrgChart.templates.ana);
            OrgChart.templates.department.size = [330, 50];
            OrgChart.templates.department.node =
                '<rect x="0" y="0" width="330" height="50" fill="#ffffff" stroke-width="1" stroke="#aeaeae"></rect>';
            OrgChart.templates.department.field_0 = '<text style="font-size: 24px;" fill="#aeaeae" x="165" y="30" text-anchor="middle">{val}</text>';

            OrgChart.templates.department.ripple = {
                radius: 0,
                color: "#F57C00",
                rect: null
            };

            OrgChart.templates.staff = Object.assign({}, OrgChart.templates.ana);
            OrgChart.templates.staff.size = [50, 300];
            OrgChart.templates.staff.node =
                '<rect x="0" y="0" width="50" height="300" fill="#ffffff" stroke-width="1" stroke="#aeaeae"></rect>';
            OrgChart.templates.staff.field_0 = '<text transform="rotate(90)"  style="font-size: 24px;" fill="#aeaeae" x="150" y="-15" text-anchor="middle">{val}</text>';

            OrgChart.templates.staff.ripple = {
                radius: 0,
                color: "#FFCA28",
                rect: null
            };

            var chart = new OrgChart(document.getElementById("tree"), {
                // template: "mila",
                template: "diva",
                // scaleInitial: 0.5,
                mouseScrool: OrgChart.action.scroll,
                scaleInitial: OrgChart.match.boundary,
                menu: {
                    pdf: {
                        text: "Export PDF"
                    },
                    png: {
                        text: "Export PNG"
                    },
                    svg: {
                        text: "Export SVG"
                    },
                    csv: {
                        text: "Export CSV"
                    }
                },
                nodeBinding: {
                    field_0: "Nama",
                },
                tags: {
                    "Company": {
                        template: "company"
                    },
                    "Department": {
                        template: "department"
                    },
                    "Staff": {
                        template: "staff"
                    },
                    "Direksi": {
                        template: "dir"
                    },
                    "Dewan Komisaris": {
                        template: "dekom"
                    }
                },
                // slinks: [{
                //         from: "5e8c20fddbda8",
                //         to: "5e8c291741b01",
                //         template: 'yellow',
                //         // label: 'Koo'
                //     },
                //     {
                //         from: "5e8c20fddbda8",
                //         to: "5e8c20ceb1416",
                //         template: 'blue',
                //         // label: 'Laporkan Hasil Audit'
                //     },
                // ],
            });

            chart.on('redraw', function(sender) {
                blur();
            });
            chart.editUI.on('show', function(sender, id) {
                selectedId = id;
                blur();
            });
            chart.editUI.on('hide', function(sender) {
                var elements = document.querySelectorAll('[filter="url(#f1)"]');
                for (var i = 0; i < elements.length; i++) {
                    elements[i].removeAttribute('filter');
                }
                selectedId = null;
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

                function blur() {
                    if (selectedId == null) {
                        return;
                    }
                    var node = chart.getBGNode(selectedId);
                    var skipBlur = [node.id];
                    var skipBlurLink = [];
                    while (node.parent) {
                        skipBlur.push(node.parent.id);
                        skipBlurLink.push('[' + node.parent.id + '][' + node.id + ']')
                        node = node.parent;
                    }

                    var nodeElements = document.querySelectorAll('[node-id]');
                    for (var i = 0; i < nodeElements.length; i++) {
                        var id = nodeElements[i].getAttribute('node-id');
                        if (skipBlur.indexOf(id) == -1)
                            nodeElements[i].setAttribute('filter', 'url(#f1)');
                    }

                    var expcollElements = document.querySelectorAll('[control-expcoll-id]');
                    for (var i = 0; i < expcollElements.length; i++) {
                        var id = expcollElements[i].getAttribute('control-expcoll-id');
                        if (skipBlur.indexOf(id) == -1)
                            expcollElements[i].setAttribute('filter', 'url(#f1)');
                    }

                    var linksElements = document.querySelectorAll('[link-id]');
                    for (var i = 0; i < linksElements.length; i++) {
                        var id = linksElements[i].getAttribute('link-id');

                        if (skipBlurLink.indexOf(id) == -1)
                            linksElements[i].setAttribute('filter', 'url(#f1)');
                    }
                }

                function preview() {
                    OrgChart.pdfPrevUI.show(chart, {
                        format: 'A4'
                    });
                }
            }

            chart.draw(OrgChart.action.init);
            // chart.fit();
        </script>