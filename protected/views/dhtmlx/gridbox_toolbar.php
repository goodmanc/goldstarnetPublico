<?php
$isToolbarNew = isset($isToolbarNew) ? $isToolbarNew : true;
?>

<!--	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/grid/dhtmlxgrid.css" type="text/css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/grid/skins/dhtmlxgrid_dhx_skyblue.css" type="text/css" media="screen" title="no title" charset="utf-8">-->

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/skins/skyblue/dhtmlxtoolbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/skins/material/dhtmlxtoolbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/skins/terrace/dhtmlxtoolbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/skins/web/dhtmlxtoolbar.css">

<div id="ribbonObj"></div>
<div id="toolbarObj"></div>
<div id="grid_here" style="width:100%; height:<?php echo isset($grid_height) ? $grid_height : 200; ?>px">
</div>

<script type="text/javascript" charset="utf-8">
    var mygrid;
    var dp;
    var myToolbar;
    var baseImgsUrl = baseUrl + '/js/dhtmlx/imgs';

    function add_row() {
        var id = mygrid.uid();
        addRowGrid(mygrid, id);
        mygrid.selectRowById(id);
    }

    function save_row() {
        dp.sendData();
    }



    function startGridbox() {
        mygrid = new dhtmlXGridObject('grid_here');
        mygrid.setImagePath(baseUrl + '/js/dhtmlx/imgs/dhx_skyblue');
        mygrid.setSkin("dhx_skyblue");
        mygrid.load(baseUrl + "<?php echo $grid_data ?>");
        mygrid.attachEvent("onXLS", function (id) {
            this.setMathRound(2);
            this.enableMathEditing(true);
            this.enableColumnMove(true);
            this.enableAutoWidth(true);
            this.enableAutoHeight(true);            
            this.init();
            this.resetCounter(0);
        });

        mygrid.attachEvent("onGridReconstructed", function () {
            this.resetCounter(0);
        });

        mygrid.attachEvent("onXLE", function () {
            this.resetCounter(0);
            this.setSizes();
        });

        dp = new dataProcessor(baseUrl + "<?php echo $grid_data ?>");
        dp.init(mygrid);
        dp.setTransactionMode("POST", true);
        dp.setUpdateMode("off");

        try{dp.defineAction("updated", dp_updated);}catch(e){}
        try{dp.defineAction("inserted", dp_inserted);}catch(e){}
        try{dp.defineAction("end", dp_end);}catch(e){}
        
        dp.attachEvent("onAfterUpdate", function (sid, action, tid, xml) {
            mygrid.resetCounter(0);
        })

    }


    function startToolbar() {
        var iconsPath = {
            dhx_skyblue: "imgs",
            dhx_web: "icons_web",
            dhx_terrace: "icons_terrace",
            material: "icons_material"
        };
        skin = "dhx_web";

        myToolbar = new dhtmlXToolbarObject({
            parent: 'toolbarObj',
            icon_path: baseImgsUrl + '/common/' + iconsPath[skin] + '/',
            items: [
                <?php if ($isToolbarNew) { ?>  {type: 'button', id: 'add', text: 'Nuevo Registro', title: 'Nuevo Registro', img: '../18/new.gif'}, <?php } ?>
                {type: 'button', id: 'save', text: 'Guardar', title: 'Guardar Registro', img: '../18/save.gif'},
                {type: 'separator', id: 'sep5'},
            ]
        });
        myToolbar.setSkin(skin);
        myToolbar.attachEvent('onClick', function (id) {
            switch (id) {
                case 'add':
                    add_row();
                    break;
                case 'save':
                    save_row();
                    break;
            }
        });
    }

    function startRibbon() {
        var data = {
            parent: 'ribbonObj',
            icons_path: baseImgsUrl + '/common/',
            items: [
                {
                    type: 'block', text: 'Básico', mode: 'cols', list: [
                        {type: 'button', id: 'open', text: 'Open', img: '48/open.gif'},
                        {type: 'button', id: 'new', text: 'new', img: '18/new.gif'},
                        {type: 'button', id: 'cut', text: 'cut', img: '18/cut.gif'},
                    ]
                },
                {
                    type: 'block', text: 'Advanzado', mode: 'cols', list: [
                        {type: 'button', id: 'excel', text: 'excel', img: '48/excel.png', isbig: true}
                    ]
                },
            ]
        };
        myRibbon = new dhtmlXRibbon(data);
        myRibbon.attachEvent('onClick', function (id) {
            alert(id)
        });
        document.getElementById('ribbonObj').style.width = '100%';
        myRibbon.setSizes();
    }


    function startDhtml() {
//        startRibbon();
        startToolbar();
        startGridbox();
    }


</script>
