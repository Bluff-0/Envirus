# -*- coding: utf-8 -*-
"""
Created on Thu Aug  8 20:43:09 2019

@author: KIIT
"""

import numpy as np
from flask import Flask,request,jsonify,render_template
import pickle

app=Flask(__name__)
model2=pickle.load(open('model1.pkl','rb'))
@app.route('/')
def home():
    return render_template('index.html')

@app.route('/predict',methods=['POST'])
def predict():
    a=[]
    int_features = [int(x) for x in request.form.values()]
    list1 = [np.array(int_features)]
    print(list1)
    a.append([list1[0][0]])
    if list1[0][1]== 1:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 2:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 3:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 4:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 5:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 6:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 7:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 8:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 9:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 10:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 11:
        for zz in range(1, 31):
            if zz == list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 12:
        for zz in range(1, 31):
            if zz == list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 13:
        for zz in range(1, 31):
            if zz == list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 14:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 15:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 16:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 17:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 18:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 19:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 20:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 21:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 22:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 23:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 24:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 25:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 26:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 27:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 28:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 29:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    elif list1[0][1] == 30:
        for zz in range(1,31):
            if zz==list1[0][1]:
                a[0].append(1)
            else:
                a[0].append(0)
    #print(a)
    predictions = model2.predict(a)
    output = round(predictions[0], 2)
    return render_template('index.html', prediction_text='Air Quality Index {}'.format(output))
    
if __name__ == "__main__":
    app.run(debug=True)