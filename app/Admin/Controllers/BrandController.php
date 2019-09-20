<?php

namespace App\Admin\Controllers;

use App\Model\BrandModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BrandController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\BrandModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BrandModel);

        $grid->column('b_id', __('编号'));
        $grid->column('b_name', __('品牌名称'));
        $grid->column('b_url', __('品牌地址'));
        $grid->column('b_logo', __('品牌图标'))->image();
        $grid->column('b_desc', __('品牌简介'));
        $grid->column('b_is_show', __('是否显示'));
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('修改时间'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(BrandModel::findOrFail($id));

        $show->field('b_id', __('B id'));
        $show->field('b_name', __('B name'));
        $show->field('b_url', __('B url'));
        $show->field('b_logo', __('B logo'));
        $show->field('b_desc', __('B desc'));
        $show->field('b_is_show', __('B is show'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BrandModel);

        // $form->display('b_id', __('ID'));
        $form->text('b_name', __('品牌名称'));
        $form->text('b_url', __('品牌网址'));
        $form->image('b_logo', __('品牌图标'))->move('/brand');
        $form->text('b_desc', __('品牌简介'));
        $form->switch('b_is_show', __('是否显示'));

        return $form;
    }
}
