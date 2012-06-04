default:
	@lessc -x less/style.less css/style.min.css
	@lessc less/style.less css/style.css

	@lessc -x less/print.less css/print.min.css
	@lessc less/print.less css/print.css


# experimental
pdf: 
	@@make
	@php index.php > tmp.html && wkhtmltopdf --print-media-type tmp.html resume.pdf && rm tmp.html