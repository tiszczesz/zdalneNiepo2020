namespace MeetupApi.Entities {
    public class Location {
        public int Id { get; set; }
        public string City { get; set; }
        public string Street { get; set; }

        public string PostCode { get; set; }
        public virtual Meetup Meetup { get; set; }
        public int MeetupId { get; set; }
    }
}