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
    public partial class Form1 : Form {
        private MainWindow window;
        public Form1(MainWindow window = null)
        {
            InitializeComponent();
           // string path = Directory.GetCurrentDirectory();
           // var all = Directory.GetFiles(path);
           this.window = window;
          
        }

        private void BtnWynik_Click(object sender, EventArgs e) {
            //todo walidacja pustego imienia i nazwiska -->szkoda że nie chcesz się przedstawić
            lbWynik.Text = "Witamy w krainie WindowForms:" + Environment.NewLine;
            if (!ValidateText(txtBoxImie) || !ValidateText(txtBoxNazwisko)) {
                lbWynik.ForeColor = Color.Red;
                lbWynik.Text += "Szkoda że nie chcesz się przedstawić";
            }
            else {
                lbWynik.ForeColor = Color.Black;
                lbWynik.Text += txtBoxImie.Text + " " + txtBoxNazwisko.Text;
            }
            
           // lbWynik.Text += $"{txtBoxImie.Text} {txtBoxNazwisko.Text}";
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
            if (window != null) {
                window.GeTextBox().Text += "Załadowano okienko: "+Text+" w czasie: " 
                                           + DateTime.Now.ToLongTimeString()+Environment.NewLine;
            }
        }

        private void Form1_FormClosed(object sender, FormClosedEventArgs e)
        {
            if (window != null) {
                window.GeTextBox().Text += "Zamknięto okienko: " + Text + "w czasie: "
                                           + DateTime.Now.ToLongTimeString()+Environment.NewLine;
            }
        }
    }
}
