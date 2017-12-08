<?php
/* @var $this yii\web\View */
?>

			<li class="active">直播后台控制台</li>
			<li class="active">分类管理</li>
			<li class="active">分类添加</li>
		</ul><!-- .breadcrumb -->
	</div>

	<div class="page-content">
			<div class="row">
					<div class="col-xs-12">

					<form class="form-horizontal" role="form" >
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 分类名 </label>

						<div class="col-sm-9">
							<input type="text" id="form-field-1" placeholder="用户名" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="space-4"></div>

					<div class="space-4"></div>

					<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 所属上级分类 </label>

										<div class="col-sm-9">
											<select >
												<option value="">&nbsp;</option>
												<option value="TC">住宅</option>
												<option value="GJ">商铺</option>
												<option value="XL">写字楼</option>
												<option value="HT">别墅</option>
											</select>

									    </div>
					</div>

					<div class="hr hr-24"></div>

					<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							<button class="btn btn-info" type="button">
								<i class="icon-ok bigger-110"></i>
								添加分类
							</button>

							&nbsp; &nbsp; &nbsp;
							<button class="btn" type="reset">
								<i class="icon-undo bigger-110"></i>
								重置信息
							</button>
						</div>
					</div>


				</form>
					</div><!-- /span -->
				</div><!-- /row -->

	</div><!-- /.page-content -->
</div><!-- /.main-content -->