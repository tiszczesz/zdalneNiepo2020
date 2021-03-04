using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Diagnostics.Eventing.Reader;
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
           // comboBEduction.SelectedIndex = 0;
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
            bool educationOK = ValidateEducation(comboBEduction);
           // MessageBox.Show(getSex());
           // if(!educationOK) MessageBox.Show("pusto!!!");
            if (imOK && nazOK && educationOK) {
                string imie = tbImie.Text.Trim();
                string nazwisko = tbNazwisko.Text.Trim();
                string wyksztalcenie = comboBEduction.SelectedItem.ToString();
                lbWynik.Text = $"Zarejestrowano {imie} {nazwisko} wykształcenie {wyksztalcenie} Twoja płeć: {getSex()}";
                
            }
            else {
                lbWynik.Text += " \nERROR!!!";
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

        bool ValidateEducation(ComboBox cb) {
            if(!String.IsNullOrWhiteSpace(cb.Text)) {
                lbWynik.Text = "";
                return true;
            }else
            {
                lbWynik.Text = "Nie wybrano poziomu edukacji";
                return false;
            }
        }

        string getSex() {
            var checkedButton = groupBox1.Controls.OfType<RadioButton>()
                .FirstOrDefault(element => element.Checked);
            return checkedButton.Text;
        }
        private void Ex2Form_Load(object sender, EventArgs e) {
            window.GeTextBox().Text += $"Załadowano okienko: {this.Text} o {DateTime.Now.ToLongTimeString()}" +
                                       Environment.NewLine;
        }

        private void Ex2Form_FormClosed(object sender, FormClosedEventArgs e) {
            window.GeTextBox().Text += $"Zmknięto okienko: {this.Text} o {DateTime.Now.ToLongTimeString()}" +
                                       Environment.NewLine;
        }

        private void comboBEduction_SelectedIndexChanged(object sender, EventArgs e) {
            //MessageBox.Show("Zmieniono index!!: " + comboBEduction.SelectedIndex+
            //    " oraz wartość na: "+comboBEduction.Items[comboBEduction.SelectedIndex], "Informacja");
        }
    }
}