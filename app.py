from flask import Flask, render_template

import os
tmpl_dir = os.path.join(os.path.dirname(os.path.abspath(__file__)), 'templates')

app = Flask(__name__, template_folder=tmpl_dir)

@app.route('/')
@app.route('/index.html')

def home():
	return render_template('./index.html')

@app.route('/map.html')

def map():
	return render_template('./map.html')

@app.route('/water.html')

def watermap():
	return render_template('./water.html')

@app.route('/bio.html')

def biomap():
	return render_template('./bio.html')

@app.route('/about.html')

def about():
	return render_template('./about.html')

if __name__ == '__main__':
	app.run(debug=True)
