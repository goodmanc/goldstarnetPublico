
	<!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/dhtmlxcommon.js" 		type="text/javascript" charset="utf-8"></script>-->
	<!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/dhtmlxGrid/codebase/dhtmlxgrid.js" 		type="text/javascript" charset="utf-8"></script>-->
	<!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/dhtmlxgrid.js" 		type="text/javascript" charset="utf-8"></script>-->
	<!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/dhtmlxgridcell.js" 	type="text/javascript" charset="utf-8"></script>-->

	<!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/dhtmlxdataprocessor.js" 	type="text/javascript" charset="utf-8"></script>-->
	<!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/connector/connector.js" 	type="text/javascript" charset="utf-8"></script>-->

<!--	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/grid/dhtmlxgrid.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/grid/skins/dhtmlxgrid_dhx_skyblue.css" type="text/css" media="screen" title="no title" charset="utf-8">-->

	
<style type="text/css" media="screen">
	html, body{
		margin:0px;
		padding:0px;
		height:100%;
		overflow:hidden;
	}
</style>

	<div id="grid_here" style="width:100%; height:400px;">
	</div>
	<br>
	<input type="button" value='Add new row' onclick='add_row()'>
	<input type="button" value='Delete selected' onclick='mygrid.deleteSelectedRows()'>

<script type="text/javascript" charset="utf-8">
	function add_row(){
		var id = mygrid.uid();
//		mygrid.addRow(id, ["2010-04-01","2012-02-29","New record"]);
		mygrid.selectRowById(id);
	}
	mygrid = new dhtmlXGridObject('grid_here');
	mygrid.setImagePath(baseUrl+'/js/dhtmlx/imgs/dhtmlx_clouds');
	mygrid.setSkin("dhx_skyblue");
	mygrid.load(baseUrl+"/event/grid_data");
        mygrid.attachEvent("onXLS", function(id) {
                this.init();
                this.resetCounter(0);
        });        
        
        mygrid.attachEvent("onGridReconstructed", function() {
                this.resetCounter(0);
        });

        mygrid.attachEvent("onXLE", function() {
                this.resetCounter(0);
                this.setSizes();
        });

	var dp = new dataProcessor("/goldstarnetPublico/event/grid_data");
                dp.init(mygrid);
	dp.attachEvent("onAfterUpdate", function(sid, action, tid, xml){
                mygrid.resetCounter(0);
	})
	
</script>
