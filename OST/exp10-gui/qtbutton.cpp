#include <QApplication>
#include <QPushButton>
#include <QVBoxLayout>
#include <QTextEdit>
int main(int argc, char *argv[])
{
	QApplication app(argc, argv);
	QTextEdit *textEdit = new QTextEdit();
	QPushButton *quitbutton = new QPushButton("&Quit");
	QObject::connect(quitbutton, SIGNAL(clicked()), qApp, SLOT(quit()));
	QVBoxLayout *layout = new QVBoxLayout();
	layout->addWidget(textEdit);
	layout->addWidget(quitbutton);
	QWidget window;
	window.setLayout(layout);
	window.show();
	return app.exec();
}
