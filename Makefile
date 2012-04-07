default:
	@lessc -x less/style.less css/style.min.css
	@lessc less/style.less css/style.css