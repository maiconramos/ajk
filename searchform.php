<form id="busca" class="form-horizontal" action="<?php echo home_url('/pesquisa'); ?>" method="get">
	<div class="form-group">
		<input type="search" class="form-control campo-busca" name="busca" placeholder="Buscar" value="<?php echo get_search_query();?>">
        <button class="btn-buscar" type="submit">Ir</button>
	</div>
</form>