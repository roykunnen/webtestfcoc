using Microsoft.EntityFrameworkCore.Migrations;

namespace brontona.Data.Migrations
{
    public partial class InitialCreate : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.CreateTable(
                name: "customers",
                columns: table => new
                {
                    customerid = table.Column<string>(nullable: false),
                    firstname = table.Column<string>(nullable: true),
                    lastname = table.Column<string>(nullable: true),
                    country = table.Column<string>(nullable: true),
                    province = table.Column<string>(nullable: true),
                    zipcode = table.Column<string>(nullable: true),
                    street = table.Column<string>(nullable: true),
                    streetnumber = table.Column<string>(nullable: true),
                    email = table.Column<string>(nullable: true),
                    phonenumber = table.Column<string>(nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_customers", x => x.customerid);
                });

            migrationBuilder.CreateTable(
                name: "fcocaccounts",
                columns: table => new
                {
                    accountid = table.Column<string>(nullable: false),
                    name = table.Column<string>(nullable: true),
                    permission = table.Column<string>(nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_fcocaccounts", x => x.accountid);
                });

            migrationBuilder.CreateTable(
                name: "orders",
                columns: table => new
                {
                    orderid = table.Column<string>(nullable: false),
                    customerid = table.Column<string>(nullable: true),
                    supplierid = table.Column<string>(nullable: true),
                    productid = table.Column<string>(nullable: true),
                    totalprice = table.Column<double>(nullable: false),
                    discount = table.Column<double>(nullable: false),
                    orderdate = table.Column<string>(nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_orders", x => x.orderid);
                });

            migrationBuilder.CreateTable(
                name: "products",
                columns: table => new
                {
                    productid = table.Column<string>(nullable: false),
                    description = table.Column<string>(nullable: true),
                    name = table.Column<string>(nullable: true),
                    category = table.Column<string>(nullable: true),
                    image = table.Column<string>(nullable: true),
                    brand = table.Column<string>(nullable: true),
                    color = table.Column<string>(nullable: true),
                    material = table.Column<string>(nullable: true),
                    salesprice = table.Column<double>(nullable: false),
                    purchaseprice = table.Column<double>(nullable: false),
                    availibility = table.Column<bool>(nullable: false),
                    size = table.Column<int>(nullable: false),
                    quantityinstock = table.Column<int>(nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_products", x => x.productid);
                });

            migrationBuilder.CreateTable(
                name: "reviews",
                columns: table => new
                {
                    reviewid = table.Column<string>(nullable: false),
                    productid = table.Column<string>(nullable: true),
                    customerid = table.Column<string>(nullable: true),
                    score = table.Column<double>(nullable: false),
                    text = table.Column<string>(nullable: true),
                    timestamp = table.Column<string>(nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_reviews", x => x.reviewid);
                });

            migrationBuilder.CreateTable(
                name: "suppliers",
                columns: table => new
                {
                    supplierid = table.Column<string>(nullable: false),
                    companyname = table.Column<string>(nullable: true),
                    contactfirstname = table.Column<string>(nullable: true),
                    contactlastname = table.Column<string>(nullable: true),
                    email = table.Column<string>(nullable: true),
                    phonenumber = table.Column<string>(nullable: true),
                    productid = table.Column<string>(nullable: true),
                    active = table.Column<bool>(nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_suppliers", x => x.supplierid);
                });
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropTable(
                name: "customers");

            migrationBuilder.DropTable(
                name: "fcocaccounts");

            migrationBuilder.DropTable(
                name: "orders");

            migrationBuilder.DropTable(
                name: "products");

            migrationBuilder.DropTable(
                name: "reviews");

            migrationBuilder.DropTable(
                name: "suppliers");
        }
    }
}
