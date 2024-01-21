from flask import Flask, render_template, request, redirect, url_for, flash
from flask_sqlalchemy import SQLAlchemy
from werkzeug.security import generate_password_hash, check_password_hash
from flask import session


app = Flask(__name__)
app.config['SECRET_KEY'] = '9991secretkey'
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///db.sqlite'
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False
db = SQLAlchemy(app)

first_request_initialized = False

@app.before_request
def before_request():
    global first_request_initialized
    if not first_request_initialized:
        # Ваш код инициализации здесь
        db.create_all()
        first_request_initialized = True
class User(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    email = db.Column(db.String(100), unique=True)
    password = db.Column(db.String(100))




@app.route('/register', methods=['GET', 'POST'])
def register():
    if request.method == 'POST':
        email = request.form.get('email')
        password = request.form.get('password')

        user = User.query.filter_by(email=email).first()
        if user:
            flash('Email address already exists')
            return redirect(url_for('register'))

        new_user = User(email=email, password=generate_password_hash(password, method='pbkdf2:sha256'))
        db.session.add(new_user)
        db.session.commit()
        flash('Registration successful! Please login.')
        return redirect(url_for('login'))
    return render_template('Register.html')




@app.route('/')
def mainpage():
    return render_template('Index.html')

@app.route('/login', methods=['GET', 'POST'])
def login():
    if request.method == 'POST':
        email = request.form.get('email')
        password = request.form.get('password')

        user = User.query.filter_by(email=email).first()

        if user and check_password_hash(user.password, password):
            flash('Login successful!')
            print("you loged in!")
            session['user_id'] = user.id
            return redirect(url_for('profile'))
        else:
            flash('Invalid login credentials!')
    return render_template('Login.html')

@app.route('/logout')
def logout():
    # Удаляем id пользователя из сессии
    session.pop('user_id', None)
    flash('You have been logged out.')
    return redirect(url_for('login'))


@app.route('/profile')
def profile():
    user_id = session.get('user_id')  # Получаем id пользователя из сессии
    if user_id:
        user = User.query.get(user_id)
        if user:
            return render_template('profile.html', user=user)
    return redirect(url_for('login'))


@app.route('/about')
def about():
    return render_template('About.html')

@app.route('/tests')
def tests():
    return render_template('Tests.html')

@app.route('/unitytest')
def unitytest():
    return render_template('Unitytest.html')
@app.route('/pytest')
def pytest():
    return render_template('Pytest.html')
@app.route('/jstest')
def jstest():
    return render_template('Jstest.html')

if __name__ == '__main__':
    app.run(debug=True)
