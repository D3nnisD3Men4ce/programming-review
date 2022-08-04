# Created by: PyQt5 UI code generator 5.11.3
# @authors: [John Mel Bolaybolay; Dennis Ivan Baliguat]
# @topic: Stopwatch
# @date: May 24, 2019


from PyQt5 import QtCore, QtGui, QtWidgets
from PyQt5 import Qt
from PyQt5.uic import loadUi
from PyQt5.QtGui import QIcon
from PyQt5.QtWidgets import *
import sys


TICK_TIME = 2**6      #affects accuracy of timer


class Ui_MainWindow(object):

    onRunning= False    #to control when the start, pause, lap, and reset button will work

    def setupUi(self, MainWindow):
        MainWindow.setObjectName("MainWindow")
        MainWindow.resize(421, 370)
        self.centralwidget = QtWidgets.QWidget(MainWindow)
        self.centralwidget.setObjectName("centralwidget")



        self.StartButton = QtWidgets.QPushButton(self.centralwidget)
        self.StartButton.setGeometry(QtCore.QRect(20, 110, 131, 51))
        font = QtGui.QFont()
        font.setFamily("Gotham Bold")
        font.setPointSize(14)
        font.setBold(True)
        font.setWeight(75)
        self.StartButton.setFont(font)
        self.StartButton.setObjectName("StartButton")
        self.StartButton.clicked.connect(self.do_start)     #START BUTTON!!
        

        
        self.LapButton = QtWidgets.QPushButton(self.centralwidget)
        self.LapButton.setGeometry(QtCore.QRect(20, 160, 131, 51))
        font = QtGui.QFont()
        font.setFamily("Gotham Bold")
        font.setPointSize(14)
        font.setBold(True)
        font.setWeight(75)
        self.LapButton.setFont(font)
        self.LapButton.setObjectName("LapButton")       #LAP BUTTON!
        self.LapButton.clicked.connect(self.InsertData)

    
        
        self.StopButton = QtWidgets.QPushButton(self.centralwidget)
        self.StopButton.setGeometry(QtCore.QRect(20, 210, 131, 51))
        font = QtGui.QFont()
        font.setFamily("Gotham Bold")
        font.setPointSize(14)
        font.setBold(True)
        font.setWeight(75)
        self.StopButton.setFont(font)
        self.StopButton.setObjectName("StopButton")
        self.StopButton.clicked.connect(self.do_reset)          #RESET BUTTON



        self.tableWidget = QtWidgets.QTableWidget(self.centralwidget)
        self.tableWidget.setGeometry(QtCore.QRect(160, 110, 241, 201))
        self.tableWidget.setRowCount(0)
        self.tableWidget.setColumnCount(2)
        self.tableWidget.setObjectName("tableWidget")
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setHorizontalHeaderItem(0, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setHorizontalHeaderItem(1, item)
        item = QtWidgets.QTableWidgetItem()
        self.tableWidget.setHorizontalHeaderItem(2, item)



        self.LDCDisplay = QtWidgets.QLCDNumber(self.centralwidget)
        self.LDCDisplay.setGeometry(QtCore.QRect(10, 10, 391, 81))
        self.LDCDisplay.setLayoutDirection(QtCore.Qt.LeftToRight)
        self.LDCDisplay.setFrameShape(QtWidgets.QFrame.NoFrame)
        self.LDCDisplay.setLineWidth(1)
        self.LDCDisplay.setSmallDecimalPoint(True)
        self.LDCDisplay.setDigitCount(14)
        self.LDCDisplay.display("00:00:00 . 00")
        self.LDCDisplay.setObjectName("LDCDisplay")



        self.StartButton_2 = QtWidgets.QPushButton(self.centralwidget)
        self.StartButton_2.setGeometry(QtCore.QRect(20, 260, 131, 50))
        font = QtGui.QFont()
        font.setFamily("Gotham Bold")
        font.setPointSize(14)
        font.setBold(True)
        font.setWeight(75)
        self.StartButton_2.setFont(font)
        self.StartButton_2.setObjectName("StartButton_2")              #SAVE RECORD
        self.StartButton_2.clicked.connect(self.save_file) 



        self.InputName = QtWidgets.QLineEdit(self.centralwidget)
        self.InputName.move(20,320)
        self.InputName.setPlaceholderText("Please enter file name.")



        MainWindow.setCentralWidget(self.centralwidget)
        self.menubar = QtWidgets.QMenuBar(MainWindow)
        self.menubar.setGeometry(QtCore.QRect(0, 0, 421, 21))
        self.menubar.setObjectName("menubar")
        MainWindow.setWindowIcon(QtGui.QIcon("C:/Users/ivanc/Google Drive/1 MSU - IIT/2 First Year Second Sem/Object Oriented Programming/Mini Project/Stopwatch/The One/Without Hotkey/logo.png")) #AppIcon



        MainWindow.setMenuBar(self.menubar)
        self.statusbar = QtWidgets.QStatusBar(MainWindow)
        self.statusbar.setObjectName("statusbar")
        MainWindow.setStatusBar(self.statusbar)
        self.retranslateUi(MainWindow)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)
        
        

        self.timer= Qt.QTimer()                 #SELF.TIMER 
        self.timer.setInterval(TICK_TIME)       #timeout sends repititive signals at a constant interval
        self.timer.timeout.connect(self.tick)   #when timeout is called by start, self.time is added
        self.time = 0                           #arithmetically with the d of tick/1000
        self.x = 0
        self.Milli =[]
        self.y = 0
        self.hour_display2 = 0
        self.minute_display2 = 0
        self.second_display2 = 0
        self.millisecond_display2 =0
        self.time2 = 0
        self.records = []



    def retranslateUi(self, MainWindow):
        _translate = QtCore.QCoreApplication.translate
        MainWindow.setWindowTitle(_translate("MainWindow", "Stopwatch"))
        self.StartButton.setText(_translate("MainWindow", "START"))
        self.LapButton.setText(_translate("MainWindow", "LAP"))
        self.StopButton.setText(_translate("MainWindow", "RESET"))
        item = self.tableWidget.horizontalHeaderItem(0)
        item.setText(_translate("MainWindow", "Laps"))
        item = self.tableWidget.horizontalHeaderItem(1)
        item.setText(_translate("MainWindow", "Split"))
        self.StartButton_2.setText(_translate("MainWindow", "SAVE"))



    def display(self):
        self.seconds = self.time // 60
        self.minutes=self.seconds//60
        self.hour_display = self.minutes // 60
        self.minute_display = self.minutes % 60
        self.second_display = self.seconds % 60
        self.millisecond_display = self.time % 60
        self.alltime = self.hour_display, self.minute_display, self.second_display, self.millisecond_display
        self.alltime2 = [self.hour_display, self.minute_display, self.second_display, self.millisecond_display]
        self.LDCDisplay.display("%02d:%02d:%02d . %02d" % (self.alltime))



    def do_start(self):
        if self.onRunning == False:
            self.onRunning=True
            self.StartButton.setText("PAUSE")
            self.timer.start(1)     #start() calls for the Qtimer timeout to start sending repititive signal
            self.StartButton.clicked.connect(self.do_pause) #start(1) -- 1 millisecond for the timeout interval

        

    def tick(self):
        self.time += TICK_TIME/1000      #self.time += 0.064 milliseconds
        self.display()



    def do_reset(self):
        if self.onRunning==False:
            self.LDCDisplay.display("00:00:00 . 00")
            self.time=0
        elif self.onRunning==True:
            self.time=0
        self.tableWidget.setRowCount(0)
        self.Milli.clear()
        self.y = 0
        self.x = 0
        self.records = []
        _translate = QtCore.QCoreApplication.translate
        MainWindow.setWindowTitle(_translate("MainWindow", "Stopwatch"))
        self.InputName.clear()



    def do_pause(self):
        if self.onRunning==True:
            self.onRunning=False
            self.timer.stop()
            self.StartButton.setText("START")
            self.StartButton.clicked.connect(self.do_start)



    def save_file(self):
        name = self.InputName.text()
        str1 = '\n'.join(str(e) for e in self.records)
        saveFile = open("C:/Users/ivanc/Desktop/%s.txt" % (name), "w") #Places saved laps in a designated folder
        saveFile.write(str1)
        saveFile.close()

        _translate = QtCore.QCoreApplication.translate
        MainWindow.setWindowTitle(_translate("MainWindow", "Stopwatch (saved)"))



    def InsertData(self):
        #Adds Rows to Table Widget

        if self.onRunning==True :
            self.x += 1

            self.tableWidget.insertRow(self.y)


            cell = QtWidgets.QTableWidgetItem

            a = "%02d:%02d:%02d.%02d" % (self.alltime)   #setItem inputs data inside a cell


            #Elapsed add
            self.tableWidget.setItem(self.y , 0, cell(a))



            #Difference add
            self.Milli.insert(0, self.time)

        

            if self.x == 1:
                self.tableWidget.setItem(self.y, 1, cell("+%02d:%02d:%02d.%02d" % (self.alltime)))



            elif self.x > 1:
                self.time2 = self.Milli[0] - self.Milli[1]
                self.seconds2 = self.time2 //60
                self.minutes2 = self.seconds2 //60
                self.hour_display2= self.minutes2//60
                self.minute_display2= self.minutes2 % 60
                self.second_display2 = self.seconds2 % 60
                self.millisecond_display2 = self.time2 %60
                self.tableWidget.setItem(self.y, 1, cell("+%02d:%02d:%02d.%02d" % (self.hour_display2, self.minute_display2, self.second_display2, self.millisecond_display2)))

            self.records.append(a)
            self.y += 1
            self.tableWidget.scrollToBottom()

                
            

if __name__ == "__main__":
    import sys
    app = QtWidgets.QApplication(sys.argv)
    MainWindow = QtWidgets.QMainWindow()
    ui = Ui_MainWindow()
    ui.setupUi(MainWindow)
    MainWindow.show()
    sys.exit(app.exec_())

