<?php
// +----------------------------------------------------------------------
// | ThinkCMF5 腾讯、爱奇艺等vip视频解析接口管理插件
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 http://www.a1k4id.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: A1k4id <04h6n4y@gmail.com>
// +----------------------------------------------------------------------
namespace plugins\video_hack\controller; //Demo插件英文名，改成你的插件英文就行了

use cmf\controller\PluginBaseController;
use think\Db;

class AdminIndexController extends PluginBaseController
{

    public function _initialize()
    {
        $adminId = cmf_get_current_admin_id(); //获取后台管理员id，可判断是否登录
        if (!empty($adminId)) {
            $this->assign("admin_id", $adminId);
        } else {
            //TODO no login
            $this->error('未登录');
        }
    }

    public function index()
    {
        $video_hack = Db::name('video_hack')
            ->order("id ASC")
            ->paginate(10);
        $page = $video_hack->render();
        $this->assign("page", $page);
        $this->assign("video_hack", $video_hack);
        return $this->fetch('/admin_index');
    }

    public function add()
    {
        return $this->fetch('/admin_add');
    }

    public function addPost()
    {
        if ($this->request->isPost()) {
            $result = $this->validate($this->request->param(), 'PluginVideoHack');
            if ($result !== true) {
                $this->error($result);
            } else {
                $_POST['create_time'] = time();
                $_POST['update_time'] = $_POST['create_time'];
                $result               = DB::name('video_hack')->insertGetId($_POST);
                if ($result !== false) {
                    $this->success("添加成功！", cmf_plugin_url('VideoHack://AdminIndex/index'));
                } else {
                    $this->error("添加失败！");
                }
            }
        }

    }

    public function edit()
    {
        $id         = $this->request->param('id', 0, 'intval');
        $video_hack = DB::name('video_hack')->where(["id" => $id])->find();
        $this->assign('video_hack', $video_hack);
        return $this->fetch('/admin_edit');
    }

    public function editPost()
    {
        if ($this->request->isPost()) {
            $result = $this->validate($this->request->param(), 'PluginVideoHack');
            if ($result !== true) {
                $this->error($result);
            } else {
                $_POST['update_time'] = time();
                $result               = DB::name('video_hack')->update($_POST);
                if ($result !== false) {
                    $this->success("保存成功！");
                } else {
                    $this->error("保存失败！");
                }
            }

        }
    }

    public function delete()
    {
        $id = $this->request->param('id', 0, 'intval');
        if (Db::name('video_hack')->delete($id) !== false) {
            $this->success("删除成功！");
        } else {
            $this->error("删除失败！");
        }
    }

}
