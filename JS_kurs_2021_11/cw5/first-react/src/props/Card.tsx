import "./Card.css";
interface CardProps{
    firstname:string;
    lastname:string;
}
export const Card = ({firstname,lastname}:CardProps) => {
    return <div>
       <div className="card">
           <p>Imię: {firstname}</p>
           <p>Nazwisko: {lastname}</p>
       </div>
    </div>
}