using System;
using System.IO;
using System.Data.SqlClient;

namespace con1
{
  class Program
  {
    static void Main(string[] args)
    {
      //  SaveToFile();
      GetFromDB();
      // Console.ReadKey();
    }
    public static void SaveToFile()
    {
      string[] lines = { "ala ma kota", "żaba jest żółta", "rybki śpią w jeziorze","1111111" };
      string path = Environment.CurrentDirectory;
      using (StreamWriter outputFile = new StreamWriter(Path.Combine(path, "dane.txt"), false))
      {
        foreach (string line in lines)
        {
          outputFile.WriteLine(line);
        }
      }
      Console.WriteLine(path);
    }

    public static void GetFromDB() {
        
        string connectionString =
            @"Data Source=(localdb)\MSSQLLocalDB;Initial Catalog=RadioButtonListDemo;Integrated Security=True;";
        SqlConnection conn = new SqlConnection(connectionString);
        conn.Open();
        SqlCommand command = conn.CreateCommand();
        command.CommandText = "SELECT * FROM Category";
        SqlDataReader sr = command.ExecuteReader();
        while (sr.Read()) {
            Console.WriteLine(sr.GetValue(1));
        } 
        conn.Close();
    }
  }
}
