using Microsoft.EntityFrameworkCore.Migrations;

namespace WebMVC_DB2_sp.Migrations
{
    public partial class first : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.CreateTable(
                name: "Animals",
                columns: table => new
                {
                    Id = table.Column<int>(type: "int", nullable: false)
                        .Annotation("SqlServer:Identity", "1, 1"),
                    Name = table.Column<string>(type: "nvarchar(max)", nullable: false),
                    Weight = table.Column<int>(type: "int", nullable: false),
                    Description = table.Column<string>(type: "nvarchar(max)", nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Animals", x => x.Id);
                });

            migrationBuilder.InsertData(
                table: "Animals",
                columns: new[] { "Id", "Description", "Name", "Weight" },
                values: new object[,]
                {
                    { 1, "Mały biały piesek bez łat", "Pikuś", 2000 },
                    { 2, "Coś na ząbek", "Rybka", 20 },
                    { 3, "Mały żółty ptaszek śpiewający", "Kanarek", 100 },
                    { 4, "Mały czarny kotek bez łat", "Mruczek", 1000 },
                    { 5, "Duży biały kotek bez łat", "Bonifacy", 2000 }
                });
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropTable(
                name: "Animals");
        }
    }
}
