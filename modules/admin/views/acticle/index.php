<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/26
 * Time: 15:50
 */
use app\assets\AdminAsset;
use app\support\widgets\JsBlock;

$this->registerCssFile('/admin/css/plugins/dataTables/datatables.min.css', [AdminAsset::className(), 'depends' => 'app\assets\AdminAsset']);
$this->registerJsFile('/admin/js/plugins/jeditable/jquery.jeditable.js',[AdminAsset::className(), 'depends' => 'app\assets\AdminAsset']);
$this->registerJsFile('/admin/js/plugins/dataTables/datatables.min.js',[AdminAsset::className(), 'depends' => 'app\assets\AdminAsset']);
?>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Editable Table in- combination with jEditable</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="">
                        <a href="#" class="btn btn-primary ">Add a new row</a>
                    </div>
                    <table class="table table-striped table-bordered table-hover " id="acticle" >
                        <thead>
                        <tr>
                            <th>文章名称</th>
                            <th>文章标题</th>
                            <th>文章作者</th>
                            <th>文章分类</th>
                            <th>文章阅读次数</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="gradeX">
                            <td>Trident</td>
                            <td>Internet
                                Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                            <td class="center">4</td>
                            <td class="center">X</td>
                            <td class="center">X</td>
                        </tr>

                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6">文章</td>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<?php JsBlock::begin()?>
<script>
    $(document).ready(function(){

        /* Init DataTables */
        var oTable = $('#acticle').DataTable({
            'ajax':{
                url : '/admin/acticle/list',
                dataSrc : 'data'
            },
            /*'columns' : {
            },*/
            'info':false,
            'processing':true,      //排序显示过程
            "deferRender": true     //延时加载
        });

        /* Apply the jEditable handlers to the table */
        oTable.$('td').editable( '/example_ajax.php', {
            "callback": function( sValue, y ) {
                var aPos = oTable.fnGetPosition( this );
                oTable.fnUpdate( sValue, aPos[0], aPos[1] );
            },
            "submitdata": function ( value, settings ) {
                return {
                    "row_id": this.parentNode.getAttribute('id'),
                    "column": oTable.fnGetPosition( this )[2]
                };
            },

            "width": "90%",
            "height": "100%"
        } );


    });

    /*function fnClickAddRow() {
        $('#editable').dataTable().fnAddData( [
            "Custom row",
            "New row",
            "New row",
            "New row",
            "New row" ] );

    }*/
</script>
<?php JsBlock::end()?>
