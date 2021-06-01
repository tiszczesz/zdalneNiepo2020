using System;
using Microsoft.EntityFrameworkCore.Migrations;

namespace WebMVC_G_DBGen.Migrations
{
    public partial class seed : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.InsertData(
                table: "User",
                columns: new[] { "Id", "Email", "RegDate", "UserName" },
                values: new object[,]
                {
                    { 1, "user1@example.com", new DateTime(2021, 5, 31, 11, 30, 0, 926, DateTimeKind.Local).AddTicks(8538), "User1" },
                    { 2, "user2@example.com", new DateTime(2021, 5, 31, 11, 30, 0, 926, DateTimeKind.Local).AddTicks(8896), "User2" },
                    { 3, "user3@example.com", new DateTime(2021, 5, 31, 0, 0, 0, 0, DateTimeKind.Local), "User3" },
                    { 4, "user4@example.com", new DateTime(2021, 5, 31, 0, 0, 0, 0, DateTimeKind.Local), "User4" }
                });
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DeleteData(
                table: "User",
                keyColumn: "Id",
                keyValue: 1);

            migrationBuilder.DeleteData(
                table: "User",
                keyColumn: "Id",
                keyValue: 2);

            migrationBuilder.DeleteData(
                table: "User",
                keyColumn: "Id",
                keyValue: 3);

            migrationBuilder.DeleteData(
                table: "User",
                keyColumn: "Id",
                keyValue: 4);
        }
    }
}
