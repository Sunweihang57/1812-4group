<?php

namespace App\Admin\Controllers;

use App\Model\GoodsModel;
use Encore\Admin\Controllers\AdminController;
use App\Model\CateModel;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GoodsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\GoodsModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new GoodsModel);

        $grid->column('goods_id', __('Goods id'));
        $grid->column('goods_title', __('Goods title'));
        $grid->column('goods_price', __('Goods price'));
        $grid->column('goods_desc', __('Goods desc'));
        $grid->column('goods_img', __('Goods img'))->image();
        $grid->column('cate_id', __('Cate id'));
        $grid->column('brang_id', __('Brang id'));

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
        $show = new Show(GoodsModel::findOrFail($id));

        $show->field('goods_id', __('Goods id'));
        $show->field('goods_title', __('Goods title'));
        $show->field('goods_price', __('Goods price'));
        $show->field('goods_desc', __('Goods desc'));
        $show->field('goods_img', __('Goods img'));
        $show->field('cate_id', __('Cate id'));
        $show->field('brang_id', __('Brang id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new GoodsModel);

        $form->text('goods_title', __('Goods title'));
        $form->number('goods_price', __('Goods price'));
        $form->text('goods_desc', __('Goods desc'));
        $form->image('goods_img', __('Goods img'));
        $form->select('cate_id', __('Cate id'))->options(CateModel::selectOptions());
        $form->number('brang_id', __('Brang id'));

        return $form;
    }
}
