
namespace FirstWinForms_GIM
{
    partial class Ex3Form
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.btnAddNew = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.lBoxImiona = new System.Windows.Forms.ListBox();
            this.txtBoxNewContact = new System.Windows.Forms.TextBox();
            this.btnClearAll = new System.Windows.Forms.Button();
            this.btnInsert = new System.Windows.Forms.Button();
            this.btnDelete = new System.Windows.Forms.Button();
            this.btnUpdate = new System.Windows.Forms.Button();
            this.listViewDemo = new System.Windows.Forms.ListView();
            this.colId = new System.Windows.Forms.ColumnHeader();
            this.colTitle = new System.Windows.Forms.ColumnHeader();
            this.colAuthor = new System.Windows.Forms.ColumnHeader();
            this.colPrice = new System.Windows.Forms.ColumnHeader();
            this.panel1 = new System.Windows.Forms.Panel();
            this.panel2 = new System.Windows.Forms.Panel();
            this.insertFimButton = new System.Windows.Forms.Button();
            this.btnClearAllFilms = new System.Windows.Forms.Button();
            this.btnAddNewFilm = new System.Windows.Forms.Button();
            this.panel1.SuspendLayout();
            this.panel2.SuspendLayout();
            this.SuspendLayout();
            // 
            // btnAddNew
            // 
            this.btnAddNew.Location = new System.Drawing.Point(13, 12);
            this.btnAddNew.Name = "btnAddNew";
            this.btnAddNew.Size = new System.Drawing.Size(316, 29);
            this.btnAddNew.TabIndex = 1;
            this.btnAddNew.Text = "Dodaj nowego znajomego";
            this.btnAddNew.UseVisualStyleBackColor = true;
            this.btnAddNew.Click += new System.EventHandler(this.AddNew_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Segoe UI", 16.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.label1.Location = new System.Drawing.Point(12, 9);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(156, 38);
            this.label1.TabIndex = 2;
            this.label1.Text = "Lista Imion:";
            // 
            // lBoxImiona
            // 
            this.lBoxImiona.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(192)))), ((int)(((byte)(255)))), ((int)(((byte)(192)))));
            this.lBoxImiona.FormattingEnabled = true;
            this.lBoxImiona.ItemHeight = 20;
            this.lBoxImiona.Location = new System.Drawing.Point(21, 106);
            this.lBoxImiona.Name = "lBoxImiona";
            this.lBoxImiona.Size = new System.Drawing.Size(248, 544);
            this.lBoxImiona.TabIndex = 3;
            this.lBoxImiona.MouseDoubleClick += new System.Windows.Forms.MouseEventHandler(this.lBoxImiona_MouseDoubleClick);
            // 
            // txtBoxNewContact
            // 
            this.txtBoxNewContact.Location = new System.Drawing.Point(21, 63);
            this.txtBoxNewContact.Name = "txtBoxNewContact";
            this.txtBoxNewContact.Size = new System.Drawing.Size(248, 27);
            this.txtBoxNewContact.TabIndex = 4;
            // 
            // btnClearAll
            // 
            this.btnClearAll.Location = new System.Drawing.Point(13, 66);
            this.btnClearAll.Name = "btnClearAll";
            this.btnClearAll.Size = new System.Drawing.Size(316, 29);
            this.btnClearAll.TabIndex = 5;
            this.btnClearAll.Text = "Wyczyść listę znajomych";
            this.btnClearAll.UseVisualStyleBackColor = true;
            this.btnClearAll.Click += new System.EventHandler(this.ClearAll_Click);
            // 
            // btnInsert
            // 
            this.btnInsert.Location = new System.Drawing.Point(13, 120);
            this.btnInsert.Name = "btnInsert";
            this.btnInsert.Size = new System.Drawing.Size(316, 29);
            this.btnInsert.TabIndex = 6;
            this.btnInsert.Text = "Wstaw kolejnego znajomego";
            this.btnInsert.UseVisualStyleBackColor = true;
            this.btnInsert.Click += new System.EventHandler(this.btnInsert_Click);
            // 
            // btnDelete
            // 
            this.btnDelete.Location = new System.Drawing.Point(13, 174);
            this.btnDelete.Name = "btnDelete";
            this.btnDelete.Size = new System.Drawing.Size(316, 29);
            this.btnDelete.TabIndex = 7;
            this.btnDelete.Text = "Usuń wybranego znajomego";
            this.btnDelete.UseVisualStyleBackColor = true;
            this.btnDelete.Click += new System.EventHandler(this.btnDelete_Click);
            // 
            // btnUpdate
            // 
            this.btnUpdate.Location = new System.Drawing.Point(13, 232);
            this.btnUpdate.Name = "btnUpdate";
            this.btnUpdate.Size = new System.Drawing.Size(316, 29);
            this.btnUpdate.TabIndex = 8;
            this.btnUpdate.Text = "Zmień zawartość";
            this.btnUpdate.UseVisualStyleBackColor = true;
            this.btnUpdate.Click += new System.EventHandler(this.btnUpdate_Click);
            // 
            // listViewDemo
            // 
            this.listViewDemo.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.listViewDemo.Columns.AddRange(new System.Windows.Forms.ColumnHeader[] {
            this.colId,
            this.colTitle,
            this.colAuthor,
            this.colPrice});
            this.listViewDemo.FullRowSelect = true;
            this.listViewDemo.GridLines = true;
            this.listViewDemo.HideSelection = false;
            this.listViewDemo.Location = new System.Drawing.Point(659, 79);
            this.listViewDemo.Name = "listViewDemo";
            this.listViewDemo.Size = new System.Drawing.Size(521, 571);
            this.listViewDemo.TabIndex = 9;
            this.listViewDemo.UseCompatibleStateImageBehavior = false;
            this.listViewDemo.View = System.Windows.Forms.View.Details;
            // 
            // colId
            // 
            this.colId.Text = "Lp";
            // 
            // colTitle
            // 
            this.colTitle.Text = "Tytuł";
            this.colTitle.Width = 150;
            // 
            // colAuthor
            // 
            this.colAuthor.Text = "Autor";
            this.colAuthor.Width = 150;
            // 
            // colPrice
            // 
            this.colPrice.Text = "Cena";
            this.colPrice.TextAlign = System.Windows.Forms.HorizontalAlignment.Right;
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(192)))), ((int)(((byte)(255)))), ((int)(((byte)(192)))));
            this.panel1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.panel1.Controls.Add(this.btnUpdate);
            this.panel1.Controls.Add(this.btnAddNew);
            this.panel1.Controls.Add(this.btnClearAll);
            this.panel1.Controls.Add(this.btnDelete);
            this.panel1.Controls.Add(this.btnInsert);
            this.panel1.Location = new System.Drawing.Point(290, 79);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(343, 279);
            this.panel1.TabIndex = 10;
            // 
            // panel2
            // 
            this.panel2.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.panel2.Controls.Add(this.insertFimButton);
            this.panel2.Controls.Add(this.btnClearAllFilms);
            this.panel2.Controls.Add(this.btnAddNewFilm);
            this.panel2.Location = new System.Drawing.Point(290, 374);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(342, 276);
            this.panel2.TabIndex = 11;
            // 
            // insertFimButton
            // 
            this.insertFimButton.Location = new System.Drawing.Point(14, 112);
            this.insertFimButton.Name = "insertFimButton";
            this.insertFimButton.Size = new System.Drawing.Size(316, 29);
            this.insertFimButton.TabIndex = 4;
            this.insertFimButton.Text = "Wstaw nowy film";
            this.insertFimButton.UseVisualStyleBackColor = true;
            this.insertFimButton.Click += new System.EventHandler(this.insertFimButton_Click);
            // 
            // btnClearAllFilms
            // 
            this.btnClearAllFilms.Location = new System.Drawing.Point(14, 64);
            this.btnClearAllFilms.Name = "btnClearAllFilms";
            this.btnClearAllFilms.Size = new System.Drawing.Size(316, 29);
            this.btnClearAllFilms.TabIndex = 3;
            this.btnClearAllFilms.Text = "Wyczyść listę filmów";
            this.btnClearAllFilms.UseVisualStyleBackColor = true;
            this.btnClearAllFilms.Click += new System.EventHandler(this.btnClearAllFilms_Click);
            // 
            // btnAddNewFilm
            // 
            this.btnAddNewFilm.Location = new System.Drawing.Point(14, 17);
            this.btnAddNewFilm.Name = "btnAddNewFilm";
            this.btnAddNewFilm.Size = new System.Drawing.Size(316, 29);
            this.btnAddNewFilm.TabIndex = 2;
            this.btnAddNewFilm.Text = "Dodaj nowy film";
            this.btnAddNewFilm.UseVisualStyleBackColor = true;
            this.btnAddNewFilm.Click += new System.EventHandler(this.btnAddNewFilm_Click);
            // 
            // Ex3Form
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1185, 662);
            this.Controls.Add(this.panel2);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.listViewDemo);
            this.Controls.Add(this.txtBoxNewContact);
            this.Controls.Add(this.lBoxImiona);
            this.Controls.Add(this.label1);
            this.Name = "Ex3Form";
            this.Text = "Ćwiczenie 3";
            this.FormClosed += new System.Windows.Forms.FormClosedEventHandler(this.Ex3Form_FormClosed);
            this.Load += new System.EventHandler(this.Ex3Form_Load);
            this.panel1.ResumeLayout(false);
            this.panel2.ResumeLayout(false);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.Button btnAddNew;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.ListBox lBoxImiona;
        private System.Windows.Forms.TextBox txtBoxNewContact;
        private System.Windows.Forms.Button btnClearAll;
        private System.Windows.Forms.Button btnInsert;
        private System.Windows.Forms.Button btnDelete;
        private System.Windows.Forms.Button btnUpdate;
        private System.Windows.Forms.ListView listViewDemo;
        private System.Windows.Forms.ColumnHeader colTitle;
        private System.Windows.Forms.ColumnHeader colAuthor;
        private System.Windows.Forms.ColumnHeader colPrice;
        private System.Windows.Forms.ColumnHeader colId;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.Button insertFimButton;
        private System.Windows.Forms.Button btnClearAllFilms;
        private System.Windows.Forms.Button btnAddNewFilm;
    }
}