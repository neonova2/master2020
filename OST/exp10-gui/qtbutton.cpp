#include <QApplication>
#include <QPushButton>
int main(int argc, char *argv[])
{
	QApplication app(argc, argv);
	QTextEdit *textEdit = new QTextEdit;
	QPushButton *quitbutton = new QPushButton("&Quit");
	QObject::connect(quitButton, SIGNAL(clicked()), qApp, SLOT(quit()));
	QVBoxLayout *layout = new QVBoxLayout;
	layout->addWidget(textEdit);
	layout-addWidget(quitButton);
	QWidget window;
	window.setlayout(layout);
	window.show();
	return app.exec();
}
