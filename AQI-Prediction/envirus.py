# -*- coding: utf-8 -*-
"""
Created on Thu Aug  8 21:02:19 2019

@author: KIIT
"""

import pandas as pd
import numpy as np
import seaborn as sb
import matplotlib.pyplot as plt
from sklearn.feature_selection  import  RFE
import pickle
final = pd.read_csv('/home/rohan/Desktop/airf.csv')
#print(final)
#del final["state"]
#del final["DATE"]
del final["date1"]
#del final["state.1"]


#print(final.info())
final['trans'].fillna(method = 'bfill',inplace = True)


from sklearn.model_selection import KFold
from sklearn.model_selection import cross_val_score
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn.ensemble import RandomForestRegressor
#from sklearn.tree import DecisionTreeClassifier
from sklearn.model_selection import train_test_split
import seaborn as sb

add1 = pd.get_dummies(final["state"])
final = final.join(add1)
del final["state"]
aer = []
aer = final['spm']
del final["spm"]
final["spm"] = aer

array = final.values


X = array[:,0:31]
Y = array[:,31]

test_data_size = .33
seed = 7
X_train,X_test,Y_train,Y_test = train_test_split(
    X,Y,test_size=test_data_size,random_state=seed
)

model =  RandomForestRegressor(n_estimators=100,random_state=42)
model.fit(X_train,Y_train)
print(X_train[0])
predictions = model.predict(X_test)

#test = [[100066,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]]
#print(len(test))
#p1 = model.predict(test)
#print(p1)
# Calculate the absolute errors
#errors = abs(predictions - Y_test)
# Print out the mean absolute error (mae)
#print('Mean Absolute Error:', round(np.mean(errors), 2), 'degrees.')
#mape = 100 * (errors / Y_test)



#mape = mape[~np.isnan(mape)]
#print(np.argwhere(np.isnan(mape)))
#inf = []
#inf = np.argwhere(np.isinf(mape))
#mape1 = np.delete(mape,inf)
#print(mape1)

# Calculate and display accuracy
#accuracy = 100 - np.mean(mape1)

pickle.dump(model,open('model1.pkl','wb'))
model2=pickle.load(open('model1.pkl','rb'))

