using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using FirstWinForms_GIM.Models.Ex3Models;

namespace FirstWinForms_GIM
{
    public partial class Ex3Form : Form {
        private MainWindow window;
        public ContactsList Contacts { get; set; } = new ContactsList();

        public Ex3Form(MainWindow window) {
            InitializeComponent();
            this.window = window;
            window.GeTextBox().Text += "Utworzono okienko: " + this.Text + Environment.NewLine;

            lBoxImiona.DataSource = Contacts.List;
        }

        private void Ex3Form_FormClosed(object sender, FormClosedEventArgs e) {
            window.GeTextBox().Text += "Zamknięto okienko: " + this.Text+Environment.NewLine;
        }

        private void AddNew_Click(object sender, EventArgs e)
        {
            if (String.IsNullOrWhiteSpace(txtBoxNewContact.Text)) {
                MessageBox.Show("Brak wpisanego kontaktu", "Uwaga!!");
                return;
            }

           // lBoxImiona.Items.Add(txtBoxNewContact.Text);
           Contacts.List.Add(txtBoxNewContact.Text);
           lBoxImiona.DataSource = Contacts.List;
            txtBoxNewContact.Text = "";
        }

        private void ClearAll_Click(object sender, EventArgs e)
        {
            Contacts.List.Clear();
        }

        private void btnInsert_Click(object sender, EventArgs e) {
            //MessageBox.Show(lBoxImiona.SelectedIndex.ToString());
            if (lBoxImiona.SelectedIndex == -1) {
                return;
            }
            if (String.IsNullOrWhiteSpace(txtBoxNewContact.Text))
            {
                MessageBox.Show("Brak wpisanego kontaktu", "Uwaga!!");
                return;
            }
            int index = lBoxImiona.SelectedIndex;
            Contacts.List.Insert(index,txtBoxNewContact.Text);
            txtBoxNewContact.Text = "";

        }

        private void btnDelete_Click(object sender, EventArgs e)
        {

        }
    }
}
