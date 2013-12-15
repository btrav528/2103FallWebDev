
<
	
	<div class="container">
		
		<div>
			<ul class="nav nav-pills" data-bind="foreach: categories" >
				<li><a href="#" data-bind="text: Name, click: $root.categoryClicked" >Cat 1</a> </li>
			</ul>
		</div>
		
		<div data-bind="foreach: products" >
			<div class="col-sm-3">
				<div class="well">
					<h5 data-bind="text: ItemName" >Test</h5>
					<h5 data-bind="text: Price"> </h5>
					<h5 data-bind="text: Description"></h5>
					<a data-bind="attr: { href: '?action=addToCart&id=' + id} " >Add To Cart</a>
				</div>
			</div>
		</div>

		
		
		
	</div>


	<script type="text/html" id="shopping-cart-template">
		<span class="glyphicon glyphicon-shopping-cart"></span>
		<a href="#">Cart</a>
		<span class="badge"> 1 </span>
	</script>
	
	
 



    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.js"></script>
	<script type="text/javascript">
	$(function(){
 		$("#shopping-cart").html($("#shopping-cart-template").html())
 	
 		var vm = {
 			categories: ko.observableArray(),
 			products: ko.observableArray(),
 			
 			categoryClicked: function() {
		 		$.getJSON("?action=products&format=json", { CategoryId: this.Id } ,function(results){
		 			vm.products(results.model);
		 		})
 				
 			}
 		}
 		ko.applyBindings(vm);
 		
 		$.getJSON("?action=categories&format=json",function(results){
 			vm.categories(results.model);
 		})
 	});
 	</script>
  </body>
</html>

