using System;
using Microsoft.EntityFrameworkCore.Migrations;

namespace WebMVC_EFSelf.Migrations
{
    public partial class first : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.CreateTable(
                name: "Bakeries",
                columns: table => new
                {
                    BakeryId = table.Column<int>(type: "int", nullable: false)
                        .Annotation("SqlServer:Identity", "1, 1"),
                    BakeryName = table.Column<string>(type: "nvarchar(50)", maxLength: 50, nullable: true),
                    Quantity = table.Column<int>(type: "int", nullable: false),
                    Address = table.Column<string>(type: "nvarchar(50)", maxLength: 50, nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Bakeries", x => x.BakeryId);
                });

            migrationBuilder.CreateTable(
                name: "Cupcakes",
                columns: table => new
                {
                    CupcakeId = table.Column<int>(type: "int", nullable: false)
                        .Annotation("SqlServer:Identity", "1, 1"),
                    CupcakeType = table.Column<int>(type: "int", nullable: false),
                    Description = table.Column<string>(type: "nvarchar(max)", nullable: false),
                    GlutenFree = table.Column<bool>(type: "bit", nullable: false),
                    CaloricValue = table.Column<int>(type: "int", nullable: false),
                    Price = table.Column<double>(type: "float", nullable: false),
                    ImageName = table.Column<string>(type: "nvarchar(max)", nullable: true),
                    PhotFile = table.Column<byte[]>(type: "varbinary(max)", nullable: true),
                    ImageMimeType = table.Column<string>(type: "nvarchar(max)", nullable: true),
                    BakeryId = table.Column<int>(type: "int", nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Cupcakes", x => x.CupcakeId);
                    table.ForeignKey(
                        name: "FK_Cupcakes_Bakeries_BakeryId",
                        column: x => x.BakeryId,
                        principalTable: "Bakeries",
                        principalColumn: "BakeryId",
                        onDelete: ReferentialAction.Cascade);
                });

            migrationBuilder.InsertData(
                table: "Bakeries",
                columns: new[] { "BakeryId", "Address", "BakeryName", "Quantity" },
                values: new object[,]
                {
                    { 1, "Nowa Wola 32-008 ul. Błotna", "Ekstra bezglutenowe wypieki", 8 },
                    { 2, "Kłaj 32-111 ul. Topolowa 4", "Ekstra bezglutenowe wypieki", 3 },
                    { 3, "Kraków 31-288 ul. Grodzka 4", "Malanowski i zoo", 2 },
                    { 4, "Tarnów 35-008 ul. Górna 4", "Ekstra bezglutenowe wypieki", 4 }
                });

            migrationBuilder.InsertData(
                table: "Cupcakes",
                columns: new[] { "CupcakeId", "BakeryId", "CaloricValue", "CupcakeType", "Description", "GlutenFree", "ImageMimeType", "ImageName", "PhotFile", "Price" },
                values: new object[,]
                {
                    { 1, 1, 355, 0, "Vanilla cupcake with coconut cream", true, "image/jpeg", "birthday-cupcake.jpg", null, 2.5 },
                    { 2, 2, 195, 2, "Chocolate cupcake with caramel filling and chocolate butter cream", false, "image/jpeg", "chocolate-cupcake.jpg", null, 3.2000000000000002 },
                    { 3, 3, 295, 3, "Chocolate cupcake with straberry cream filling", false, "image/jpeg", "pink-cupcake.jpg", null, 4.0 },
                    { 4, 4, 360, 1, "Vanilla cupcake with butter cream", true, "image/jpeg", "turquoise-cupcake.jpg", null, 1.5 }
                });

            migrationBuilder.CreateIndex(
                name: "IX_Cupcakes_BakeryId",
                table: "Cupcakes",
                column: "BakeryId");
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropTable(
                name: "Cupcakes");

            migrationBuilder.DropTable(
                name: "Bakeries");
        }
    }
}
