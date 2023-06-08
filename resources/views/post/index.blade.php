<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @forelse (App\Models\Post::all() as $post)
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                @empty
                    <div class="p-6 text-gray-900">
                        {{ __('Empty!') }}
                    </div>
                @endforelse
            </div>
        </div>
    </div> --}}
    <div class="alert alert-danger" role="alert"><strong>Info!</strong> Add row and Delete row are working. Edit row displays modal with row cells information.</div>
<a class="btn btn-success" style="float:left;margin-right:20px;" href="https://codepen.io/collection/XKgNLN/" target="_blank">Other examples on Codepen</a>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Order</th>
			<th>Description</th>
			<th>Deadline</th>
			<th>Status</th>
			<th>Amount</th>
			<th style="text-align:center;width:100px;">Add row <button type="button" data-func="dt-add" class="btn btn-success btn-xs dt-add">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</button></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Alphabet puzzle</td>
			<td>2016/01/15</td>
			<td>Done</td>
			<td>1000</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Layout for poster</td>
			<td>2016/01/31</td>
			<td>Planned</td>
			<td>1834</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Image creation</td>
			<td>2016/01/23</td>
			<td>To Do</td>
			<td>1500</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Create font</td>
			<td>2016/02/26</td>
			<td>Done</td>
			<td>1200</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>5</td>
			<td>Sticker production</td>
			<td>2016/02/18</td>
			<td>Planned</td>
			<td>2100</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>6</td>
			<td>Glossy poster</td>
			<td>2016/03/17</td>
			<td>To Do</td>
			<td>899</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>7</td>
			<td>Beer label</td>
			<td>2016/05/28</td>
			<td>Confirmed</td>
			<td>2499</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>8</td>
			<td>Shop sign</td>
			<td>2016/04/19</td>
			<td>Offer</td>
			<td>1099</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>9</td>
			<td>X-Mas decoration</td>
			<td>2016/10/31</td>
			<td>Confirmed</td>
			<td>1750</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>10</td>
			<td>Halloween invite</td>
			<td>2016/09/12</td>
			<td>Planned</td>
			<td>400</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>11</td>
			<td>Wedding announcement</td>
			<td>2016/07/09</td>
			<td>To Do</td>
			<td>299</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>12</td>
			<td>Member pasport</td>
			<td>2016/06/22</td>
			<td>Offer</td>
			<td>149</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>13</td>
			<td>Drink tickets</td>
			<td>2016/11/01</td>
			<td>Confirmed</td>
			<td>199</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>14</td>
			<td>Album cover</td>
			<td>2017/03/15</td>
			<td>To Do</td>
			<td>4999</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>15</td>
			<td>Shipment box</td>
			<td>2017/02/08</td>
			<td>Offer</td>
			<td>1399</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>

		<tr>
			<td>16</td>
			<td>Wooden puzzle</td>
			<td>2017/01/11</td>
			<td>Done</td>
			<td>1000</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>17</td>
			<td>Fashion Layout</td>
			<td>2016/01/30</td>
			<td>Planned</td>
			<td>1834</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>18</td>
			<td>Toy creation</td>
			<td>2016/01/10</td>
			<td>To Do</td>
			<td>1550</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>19</td>
			<td>Create stamps</td>
			<td>2016/02/26</td>
			<td>Done</td>
			<td>1220</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>20</td>
			<td>Sticker design</td>
			<td>2017/02/18</td>
			<td>Planned</td>
			<td>2100</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>21</td>
			<td>Poster rock concert</td>
			<td>2017/04/17</td>
			<td>To Do</td>
			<td>899</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>22</td>
			<td>Wine label</td>
			<td>2017/05/28</td>
			<td>Confirmed</td>
			<td>2799</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>23</td>
			<td>Shopping bag</td>
			<td>2017/04/19</td>
			<td>Offer</td>
			<td>1299</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>24</td>
			<td>Decoration for Easter</td>
			<td>2017/10/31</td>
			<td>Confirmed</td>
			<td>1650</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>25</td>
			<td>Saint Nicolas colorbook</td>
			<td>2017/09/12</td>
			<td>Planned</td>
			<td>510</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>26</td>
			<td>Wedding invites</td>
			<td>2017/07/09</td>
			<td>To Do</td>
			<td>399</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>27</td>
			<td>Member pasport</td>
			<td>2017/06/22</td>
			<td>Offer</td>
			<td>249</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>28</td>
			<td>Drink tickets</td>
			<td>2017/11/01</td>
			<td>Confirmed</td>
			<td>199</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>29</td>
			<td>Blue-Ray cover</td>
			<td>2018/03/15</td>
			<td>To Do</td>
			<td>1999</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
		<tr>
			<td>30</td>
			<td>TV carton</td>
			<td>2019/02/08</td>
			<td>Offer</td>
			<td>1369</td>
			<td>
				<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</button>
				<button type="button" class="btn btn-danger btn-xs dt-delete">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
			</td>
		</tr>
	</tbody>
</table>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Row information</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</x-app-layout>
