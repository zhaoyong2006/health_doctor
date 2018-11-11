<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
<ul>
    <li class="open"><a href="#"><i class="fa fa-lg fa-fw fa-wrench"></i> <span class="menu-item-parent">系统设置</span><b
                class="collapse-sign"><em class="fa fa-collapse-o"></em></b></a>
        <ul style="display: block;">
            <li class="open"><a href="#"><i class="fa fa-lg fa-fw fa-group"></i> <span
                        class="menu-item-parent">用户管理</span><b class="collapse-sign"><em class="fa fa-collapse-o"></em></b></a>
                <ul style="display: block;">
                    <li><a href="/base/admin-user/index">用户管理</a></li>
                    <li><a href="/admin">权限分配</a></li>
                    <li><a href="/admin/menu/index">菜单管理</a></li>
                    <li><a href="/admin/role/index">角色管理</a></li>
                    <li><a href="/admin/route/index">路由管理</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-lg fa-fw fa-tachometer"></i> <span class="menu-item-parent">小工具面板</span><b
                        class="collapse-sign"><em class="fa fa-expand-o"></em></b></a>
                <ul>
                    <li><a href="/admin/api/console">API工具</a></li>
                    <li><a href="/admin/api/get-split-result">拆单结果查询</a></li>
                    <li><a href="/admin/tool/redis">redis小工具</a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>

<ul>
    <li class="active open"><a href="/base/admin-user/index"> <span>系统设置</span> <i
                class="fa fa-angle-left pull-right"></i><b class="collapse-sign"><em class="fa fa-collapse-o"></em></b></a>
        <ul class="treeview-menu" style="display: block;">
            <li class="active open"><a href="/base/admin-user/index"> <span>用户管理</span> <i
                        class="fa fa-angle-left pull-right"></i><b class="collapse-sign"><em
                            class="fa fa-collapse-o"></em></b></a>
                <ul class="treeview-menu" style="display: block;">
                    <li class="active"><a href="/base/admin-user/index"> <span>用户信息管理</span></a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>