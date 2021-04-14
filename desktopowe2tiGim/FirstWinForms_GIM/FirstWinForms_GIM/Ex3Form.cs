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
using Microsoft.VisualBasic;

namespace FirstWinForms_GIM {
    public partial class Ex3Form : Form {
        private MainWindow window;
        public ContactsList Contacts { get; set; } = new ContactsList();
        public List<Film> Filmy = FilmsList.GetFilms();
        public ActionAdd Action { get; set; }
        

        public Ex3Form(MainWindow window) {
            InitializeComponent();
            this.window = window;
            window.GeTextBox().Text += "Utworzono okienko: " + this.Text + Environment.NewLine;

            lBoxImiona.DataSource = Contacts.List;
            

        }

        private void Ex3Form_FormClosed(object sender, FormClosedEventArgs e) {
            window.GeTextBox().Text += "Zamknięto okienko: " + this.Text + Environment.NewLine;
        }

        private void AddNew_Click(object sender, EventArgs e) {
            if (String.IsNullOrWhiteSpace(txtBoxNewContact.Text)) {
                MessageBox.Show("Brak wpisanego kontaktu", "Uwaga!!");
                return;
            }

            // lBoxImiona.Items.Add(txtBoxNewContact.Text);
            Contacts.List.Add(txtBoxNewContact.Text);
            lBoxImiona.DataSource = Contacts.List;
            txtBoxNewContact.Text = "";
        }

        private void ClearAll_Click(object sender, EventArgs e) {
            Contacts.List.Clear();
        }

        private void btnInsert_Click(object sender, EventArgs e) {
            //MessageBox.Show(lBoxImiona.SelectedIndex.ToString());
            if (lBoxImiona.SelectedIndex == -1) {
                return;
            }

            if (String.IsNullOrWhiteSpace(txtBoxNewContact.Text)) {
                MessageBox.Show("Brak wpisanego kontaktu", "Uwaga!!");
                return;
            }

            int index = lBoxImiona.SelectedIndex;
            Contacts.List.Insert(index, txtBoxNewContact.Text);
            txtBoxNewContact.Text = "";
        }

        private void btnDelete_Click(object sender, EventArgs e) {
            if (lBoxImiona.SelectedIndex == -1) {
                return;
            }

            int index = lBoxImiona.SelectedIndex;
            Contacts.List.RemoveAt(index);
        }

        private void btnUpdate_Click(object sender, EventArgs e) {
            if (lBoxImiona.SelectedIndex == -1) return;
            int index = lBoxImiona.SelectedIndex;
            string wynik = Interaction.InputBox("Zmień wartość", "Update", Contacts.List[index]);
            if (!String.IsNullOrWhiteSpace(wynik)) {
                Contacts.List[index] = wynik;
            }
        }

        private void lBoxImiona_MouseDoubleClick(object sender, MouseEventArgs e) {
            if (lBoxImiona.SelectedIndex == -1) return;
            btnUpdate_Click(sender, e);
        }

        private void Ex3Form_Load(object sender, EventArgs e) {
            FillListViewDemo();
        }

        private void FillListViewDemo() {
            listViewDemo.Items.Clear();
            int lp = 0;
            foreach (var f in Filmy)
            {
                lp++;
                ListViewItem i1 = new ListViewItem(lp.ToString()); // <tr>
                //tworzenie nowego wiersza z elementow filmu (ram)
                i1.SubItems.Add(f.Title);  // <td>
                i1.SubItems.Add(f.Author);
                i1.SubItems.Add(f.Price.ToString());
                //dodawanie wiersza do kontrolki ListView(listViewDemo)
                listViewDemo.Items.Add(i1);
            }

        }

        public void AddNewFilm(Film film) {
           
            Filmy.Add(film);
            FillListViewDemo();
        }

        private void btnClearAllFilms_Click(object sender, EventArgs e)
        {
            listViewDemo.Items.Clear();
            Filmy.Clear();
        }

        private void btnAddNewFilm_Click(object sender, EventArgs e) {
            Action = ActionAdd.addNewFilm;
            NewFilmDetails details = new NewFilmDetails(this);
            details.ShowDialog();
        }

        private void insertFimButton_Click(object sender, EventArgs e) {
            Action = ActionAdd.insertNewFilm;
            NewFilmDetails details = new NewFilmDetails(this);
            details.ShowDialog();
        }
    }
}