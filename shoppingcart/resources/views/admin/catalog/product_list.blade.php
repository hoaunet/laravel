{{ header }}{{ column_left }}
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-product').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>
        <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>
        <button type="submit" form="form-product" formaction="{{ copy }}" data-toggle="tooltip" title="{{ button_copy }}" class="btn btn-default"><i class="fa fa-copy"></i></button>
        <button type="button" form="form-product" formaction="{{ delete }}" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-product').submit() : false;"><i class="fa fa-trash-o"></i></button>
      </div>
      <h1>{{ heading_title }}</h1>
      <ul class="breadcrumb">
        {% for breadcrumb in breadcrumbs %}
        <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ul>
    </div>
  </div>
  <div class="container-fluid">{% if error_warning %}
    <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    {% endif %}
    {% if success %}
    <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    {% endif %}
    <div class="row">
      <div id="filter-product" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="control-label" for="input-name">{{ entry_name }}</label>
              <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-model">{{ entry_model }}</label>
              <input type="text" name="filter_model" value="{{ filter_model }}" placeholder="{{ entry_model }}" id="input-model" class="form-control" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-price">{{ entry_price }}</label>
              <input type="text" name="filter_price" value="{{ filter_price }}" placeholder="{{ entry_price }}" id="input-price" class="form-control" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-quantity">{{ entry_quantity }}</label>
              <input type="text" name="filter_quantity" value="{{ filter_quantity }}" placeholder="{{ entry_quantity }}" id="input-quantity" class="form-control" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-status">{{ entry_status }}</label>
              <select name="filter_status" id="input-status" class="form-control">
                <option value=""></option>
                
                
                
                  
                

                  {% if filter_status == '1' %}

                
                
                  
                
                
                <option value="1" selected="selected">{{ text_enabled }}</option>
                
                
                
                  
                

                  {% else %}

                
                
                  
                
                
                <option value="1">{{ text_enabled }}</option>
                
                
                
                  
                

                  {% endif %}
                  {% if filter_status == '0' %}

                
                
                  
                
                
                <option value="0" selected="selected">{{ text_disabled }}</option>
                
                
                
                  
                

                  {% else %}

                
                
                  
                
                
                <option value="0">{{ text_disabled }}</option>
                
                
                
                  
                

                  {% endif %}


              
              
                
              
              
              </select>
            </div>
            <div class="form-group text-right">
              <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9 col-md-pull-3 col-sm-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>
          </div>
          <div class="panel-body">
            <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-product">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                      <td class="text-center">{{ column_image }}</td>
                      <td class="text-left">{% if sort == 'pd.name' %} <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a> {% else %} <a href="{{ sort_name }}">{{ column_name }}</a> {% endif %}</td>
                      <td class="text-left">{% if sort == 'p.model' %} <a href="{{ sort_model }}" class="{{ order|lower }}">{{ column_model }}</a> {% else %} <a href="{{ sort_model }}">{{ column_model }}</a> {% endif %}</td>
                      <td class="text-right">{% if sort == 'p.price' %} <a href="{{ sort_price }}" class="{{ order|lower }}">{{ column_price }}</a> {% else %} <a href="{{ sort_price }}">{{ column_price }}</a> {% endif %}</td>
                      <td class="text-right">{% if sort == 'p.quantity' %} <a href="{{ sort_quantity }}" class="{{ order|lower }}">{{ column_quantity }}</a> {% else %} <a href="{{ sort_quantity }}">{{ column_quantity }}</a> {% endif %}</td>
                      <td class="text-left">{% if sort == 'p.status' %} <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a> {% else %} <a href="{{ sort_status }}">{{ column_status }}</a> {% endif %}</td>
                      <td class="text-right">{{ column_action }}</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  {% if products %}
                  {% for product in products %}
                  <tr>
                    <td class="text-center">{% if product.product_id in selected %}
                      <input type="checkbox" name="selected[]" value="{{ product.product_id }}" checked="checked" />
                      {% else %}
                      <input type="checkbox" name="selected[]" value="{{ product.product_id }}" />
                      {% endif %}</td>
                    <td class="text-center">{% if product.image %} <img src="{{ product.image }}" alt="{{ product.name }}" class="img-thumbnail" /> {% else %} <span class="img-thumbnail list"><i class="fa fa-camera fa-2x"></i></span> {% endif %}</td>
                    <td class="text-left">{{ product.name }}</td>
                    <td class="text-left">{{ product.model }}</td>
                    <td class="text-right">{% if product.special %} <span style="text-decoration: line-through;">{{ product.price }}</span><br/>
                      <div class="text-danger">{{ product.special }}</div>
                      {% else %}
                      {{ product.price }}
                      {% endif %}</td>
                    <td class="text-right">{% if product.quantity <= 0 %} <span class="label label-warning">{{ product.quantity }}</span> {% elseif product.quantity <= 5 %} <span class="label label-danger">{{ product.quantity }}</span> {% else %} <span class="label label-success">{{ product.quantity }}</span> {% endif %}</td>
                    <td class="text-left">{{ product.status }}</td>
                    <td class="text-right"><a href="{{ product.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
                  </tr>
                  {% endfor %}
                  {% else %}
                  <tr>
                    <td class="text-center" colspan="8">{{ text_no_results }}</td>
                  </tr>
                  {% endif %}
                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class="row">
              <div class="col-sm-6 text-left">{{ pagination }}</div>
              <div class="col-sm-6 text-right">{{ results }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript"><!--
$('#button-filter').on('click', function() {
	var url = '';

	var filter_name = $('input[name=\'filter_name\']').val();

	if (filter_name) {
		url += '&filter_name=' + encodeURIComponent(filter_name);
	}

	var filter_model = $('input[name=\'filter_model\']').val();

	if (filter_model) {
		url += '&filter_model=' + encodeURIComponent(filter_model);
	}

	var filter_price = $('input[name=\'filter_price\']').val();

	if (filter_price) {
		url += '&filter_price=' + encodeURIComponent(filter_price);
	}

	var filter_quantity = $('input[name=\'filter_quantity\']').val();

	if (filter_quantity) {
		url += '&filter_quantity=' + encodeURIComponent(filter_quantity);
	}

	var filter_status = $('select[name=\'filter_status\']').val();

	if (filter_status !== '') {
		url += '&filter_status=' + encodeURIComponent(filter_status);
	}

	location = 'index.php?route=catalog/product&user_token={{ user_token }}' + url;
});
//--></script> 
  <script type="text/javascript"><!--
// IE and Edge fix!
$('button[form=\'form-product\']').on('click', function(e) {
	$('#form-product').attr('action', $(this).attr('formaction'));
});
  
$('input[name=\'filter_name\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),
			dataType: 'json',
			success: function(json) {
				response($.map(json, function(item) {
					return {
						label: item['name'],
						value: item['product_id']
					}
				}));
			}
		});
	},
	'select': function(item) {
		$('input[name=\'filter_name\']').val(item['label']);
	}
});

$('input[name=\'filter_model\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_model=' +  encodeURIComponent(request),
			dataType: 'json',
			success: function(json) {
				response($.map(json, function(item) {
					return {
						label: item['model'],
						value: item['product_id']
					}
				}));
			}
		});
	},
	'select': function(item) {
		$('input[name=\'filter_model\']').val(item['label']);
	}
});
//--></script></div>
{{ footer }} 