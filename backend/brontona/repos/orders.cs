using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Runtime.Serialization;
using System.Threading.Tasks;

namespace FCOC.Classes
{
    [DataContract]
    public class orders
    {
        [Key]
        [DataMember]
        public string orderid { get; set; }
        //[ForeignKey("customerid")]
        [DataMember]
        public string customerid { get; set; }
        [DataMember]
        //[ForeignKey("supplierid")]
        public string supplierid { get; set; }
        [DataMember]
        //[ForeignKey("productid")]
        public string productid { get; set; }
        [DataMember]
        public double totalprice { get; set; }
        [DataMember]
        public double discount { get; set; }
        [DataMember]
        public string orderdate { get; set; }
    }
}
