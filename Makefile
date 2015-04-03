export PATH := $(shell npm bin):$(PATH)

default: dev

clean:
	@rm -rf css node_modules bower

setup: clean
	@npm install
	@bower install

dev:
	@mkdir -p css
	@lessc --autoprefix='last 3 versions, > 1%' less/style.less css/style.css
	@lessc --autoprefix='last 3 versions, > 1%' less/print.less css/print.css

	@cssmin css/style.css > css/style.min.css
	@cssmin css/print.css > css/print.min.css

# # experimental
# pdf:
# 	@@make
# 	@php index.php > tmp.html && wkhtmltopdf --print-media-type tmp.html resume.pdf && rm tmp.html
