using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace FirstWinForms_GIM {
    public partial class Ex2Form : Form {
        private MainWindow window;

        public Ex2Form(MainWindow window) {
            InitializeComponent();
            this.window = window;
        }

        private void Exit_Click(object sender, EventArgs e) {
            Close();
        }

        private void btnShow_Click(object sender, EventArgs e) {
            if (!cbAgree.Checked) {
                lbWynik.Text = "Brak zgody na przetwarzanie danych!!!";
                return;
            }
           
            bool imOK = ValidateString(tbImie);
            bool nazOK = ValidateString(tbNazwisko);
            if (imOK && nazOK) {
                string imie = tbImie.Text.Trim();
                string nazwisko = tbNazwisko.Text.Trim();
                lbWynik.Text = "Zwalidowano!!!";
            }
            else {
                lbWynik.Text = "ERROR!!!";
            }
        }

        bool ValidateString(TextBox tb) {
            if (String.IsNullOrWhiteSpace(tb.Text)) {
                tb.BackColor = Color.Red;
                return false;
            }
            tb.BackColor = Color.White;
            return true;
        }
        private void Ex2Form_Load(object sender, EventArgs e) {
            window.GeTextBox().Text += $"Załadowano okienko: {this.Text} o {DateTime.Now.ToLongTimeString()}" +
                                       Environment.NewLine;
        }

        private void Ex2Form_FormClosed(object sender, FormClosedEventArgs e) {
            window.GeTextBox().Text += $"Zmknięto okienko: {this.Text} o {DateTime.Now.ToLongTimeString()}" +
                                       Environment.NewLine;
        }
    }
}