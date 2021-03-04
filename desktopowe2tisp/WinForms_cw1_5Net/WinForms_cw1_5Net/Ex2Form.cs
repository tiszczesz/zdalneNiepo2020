using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WinForms_cw1_5Net
{
    public partial class Ex2Form : Form {
        private MainWindow _window;
        public Ex2Form(MainWindow window = null)
        {
            InitializeComponent();
           // string path = Directory.GetCurrentDirectory();
           // var all = Directory.GetFiles(path);
           this._window = window;
          
        }

        private void BtnWynik_Click(object sender, EventArgs e) {
            if (!cbAgree.Checked) {
                lbWynik.Text = "Brak zgody na przetwarzanie danych!!";
                return;
            }
            lbWynik.Text = "Witamy w krainie WindowForms:" + Environment.NewLine;
            bool valImie = ValidateText(txtBoxImie);
            bool valNazwisko = ValidateText(txtBoxNazwisko);
            if (valImie && valNazwisko) {
                lbWynik.ForeColor = Color.Black;
                lbWynik.Text += txtBoxImie.Text + " " + txtBoxNazwisko.Text;
            }
            else {
                lbWynik.ForeColor = Color.Red;
                lbWynik.Text += "Szkoda że nie chcesz się przedstawić";
            }
        }

        private bool ValidateText(TextBox tb) {
            if (String.IsNullOrWhiteSpace(tb.Text)) {
                tb.BackColor = Color.Red;
                return false;
            }
            else {
                tb.BackColor = Color.White;
                return true;
            }
        }
        private void btnExit_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            if (_window != null) {
                _window.GeTextBox().Text += "Załadowano okienko: "+Text+" w czasie: " 
                                           + DateTime.Now.ToLongTimeString()+Environment.NewLine;
            }
        }

        private void Form1_FormClosed(object sender, FormClosedEventArgs e)
        {
            if (_window != null) {
                _window.GeTextBox().Text += "Zamknięto okienko: " + Text + "w czasie: "
                                           + DateTime.Now.ToLongTimeString()+Environment.NewLine;
            }
        }
    }
}
